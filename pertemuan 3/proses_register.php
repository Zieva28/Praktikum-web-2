<?php
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $major = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    function skor_skill($skills){
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootsrap' => 20,
            'PHP' => 30, 
            'Phyton' => 30,
            'Java' => 50,
        ];

        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skill_list[$skill];
        }
        return $result;
    }

    
    echo "NIM: $nim";
    echo "<br> Nama: $nama";    
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $major";
    echo "<br> Skill Program: ";
    foreach($skills as $skill){
        echo $skill . ",";
    }
    echo "<br> Domisili: $domisili";
    echo "<br> skor skill: ";
    echo "<br> kategori skill";
}
