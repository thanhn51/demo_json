<?php


class UserManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function getDataToFile() {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson, true);
    }

    function saveDataToFile($newData) {
        // chuyen array -> json
        $dataJson = json_encode($newData);
        // ghi de noi dung file
        file_put_contents($this->filePath, $dataJson);
    }

    function getAll(): array
    {
        $data = $this->getDataToFile();
        $users = [];
        foreach ($data as $item) {
            $user = new User($item);
            $users[] = $user;
        }

        return $users;
    }

    function deleteUser($index) {
        $data = $this->getDataToFile();
        array_splice($data, $index, 1);
        $this->saveDataToFile($data);
    }

    function addUser($item) {
        $data = $this->getDataToFile();
        array_push($data, $item);
        $this->saveDataToFile($data);
    }
}