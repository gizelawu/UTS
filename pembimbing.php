<?php
require_once 'database.php';

class Pembimbing
{
  static function getAllData()
  {
    global $conn;

    $sql = "SELECT * FROM pembimbing";
    $result = $conn->query($sql);
    $arr = array();

    if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
          $arr[$key][] = $value;
        }
      }
    }
    return $arr;
  }

  static function insertData($url, $name, $univ, $deskripsi, $jurusan)
  {
    global $conn;

    $sql = "INSERT INTO pembimbing(url, name, univ, deskripsi, jurusan) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $url, $name, $univ, $deskripsi, $jurusan);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    return $result;
  }

  static function updateData($id, $url, $name, $univ, $deskripsi, $jurusan)
  {
    global $conn;

    $sql = "UPDATE pembimbing SET url = ?, name = ?, univ = ?, deskripsi = ?, jurusan = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssi', $url, $name, $univ, $deskripsi, $jurusan, $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    return $result;
  }

  static function deleteData($id)
  {
    global $conn;

    $sql = "DELETE FROM pembimbing WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    return $result;
  }
}
