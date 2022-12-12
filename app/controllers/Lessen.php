<?php

class Lessen extends Controller
{
    public function __construct()
    {
        $this->lesModel = $this->model('Les');
    }

    public function index()
    {
        $result = $this->lesModel->getLessons();

        if($result)
        {
            $instructeurNaam = $result[0]->INNA;
        } else {
            $instructeurNaam = '';
        }

        $rows = '';
        foreach($result as $info)
        {
            $d = new DateTimeImmutable($info->Datum, new DateTimeZone('Europe/Amsterdam'));
            $rows .= "<tr>
            <td>{$d->format('d-m-Y')}</td>
            <td>{$d->format('H:i')}</td>
            <td>{$info->LENA}</td>
            <td><a href=''><img src='". URLROOT ."/img/b_help.png' alt=''></a></td>
            <td><a href='". URLROOT ."/lessen/topicslesson/{$info->Id}'><img src='". URLROOT ."/img/b_report.png' alt=''></a></td>
        </tr>";
        }

        $data = [
            'title' => 'Overzicht Rijlessen',
            'rows' => $rows,
            'instructeurNaam' => $instructeurNaam
        ];

        $this->view('lessen/index', $data);
    }

    function topicsLesson($lesId)
    {
        $result = $this->lesModel->getTopicsLesson($lesId);

        // var_dump($result);
        if($result)
        {
            $d = new DateTimeImmutable($result[0]->Datum, new DateTimeZone('Europe/Amsterdam'));
            $date = $d->format('d-m-Y');
            $time = $d->format('H:i');
        } else {
            $date = '';
            $time = '';
        }

        $rows = '';

        foreach ($result as $topic)
        {
            $rows .= "<tr>
                        <td>$topic->Onderwerp</td>
                    </tr>";
        }

        $data = [
            'title' => 'Overzicht Onderwerpen Les',
            'rows' => $rows,
            'lesId' => $lesId,
            'date' => $date,
            'time' => $time
        ];
        $this->view('lessen/topicslesson', $data);
    }

    public function addTopic($lesId = NULL)
  {
    $data = [
      'title' => 'Onderwerp toevoegen',
      'lesId' => $lesId,
      'topicError' => ''
    ];


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // var_dump($_POST);
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

      $data = [
        'title' => 'Onderwerp toevoegen',
        'lesId' => $_POST['lesId'],
        'topic' => $_POST['topic'],
        'topicErrors' => '',
      ];

      if (empty($data['topicError'])) {
        $result = $this->LesModel->addTopic($_POST);
        if ($result) {
          echo "<p>Het nieuwe Onderwerp is successvol toegevoegd</p>";
        } else {
          echo "<p>Het nieuwe Onderwerp is niet toegevoegd</p>";
        }
        header('Refresh:3; url=' . URLROOT . '/lessen/index/');
        } else {
        header('Refresh:3; url=' . URLROOT . '/lessen/addTopic/' . $data['lesId']);
        }
    }
    $this->view('lessen/addTopic', $data);
  }

  private function validateAddTopicForm($data)
  {
    if (strlen($data['topic']) > 255) {
      $data['topicErrors'] = 'Het nieuwe onderwerp mag niet langer zijn dan 255 tekens';
    } elseif (empty($data['topic'])) {
      $data['topicErrors'] = 'Het nieuwe onderwerp mag niet leeg zijn';
    }

    return $data;
  }
}
