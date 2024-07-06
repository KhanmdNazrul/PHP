<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_REQUEST["submit"])) {
        $stid = $_REQUEST['student'];

      $obj = new student("result.txt");
     echo $obj->show_result($stid);

    }

    class Student
    {

        public $datas;
        public $StudentData;

        public function __construct($file)
        {
            $this->datas = $file;

            $this->StudentData  = file($this->datas);
        }
        public function show_result($stid)
        {


            foreach ($this->StudentData as $data) {
                $line = explode("|", $data);
                list($id, $name, $score, $result) = $line;
                if ($id == $stid) {
                    $output = "ID: $id <br> Name: $name <br> Score: $score <br> Result: $result";
                }
            }
            return $output;
        }
    }
    ?>


    <form action="" method="post">

        <select name="student" id="">
            <option value="">Select One</option>
            <option value="1"> Saif</option>
            <option value="2">Zamil</option>
            <option value="3">Tanim</option>
        </select><br>
        <input type="submit" name="submit" value="Show result" id="">
    </form>
</body>

</html>