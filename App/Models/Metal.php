<?php

namespace App\Models;

use Core\App;

class Metal
{
    protected static $table = 'metal_songs';

    // Function to get all metal songs
    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    // Function to find a specific metal song by ID
    public static function find($idCanso)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE idCanso = :id');
        $statement->execute(['id' => $idCanso]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Function to create a new metal song
    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . ' (NomCanso, NomBanda, DataCreacio, SonActius) VALUES (:NomCanso, :NomBanda, :DataCreacio, :SonActius)');
        $statement->bindValue(':NomCanso', $data['NomCanso']);
        $statement->bindValue(':NomBanda', $data['NomBanda']);
        $statement->bindValue(':DataCreacio', $data['DataCreacio']);
        $statement->bindValue(':SonActius', $data['SonActius']);
        $statement->execute();
    }

    // Function to update an existing metal song
    public static function update($idCanso, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('UPDATE ' . static::$table . ' SET NomCanso = :NomCanso, NomBanda = :NomBanda, DataCreacio = :DataCreacio, SonActius = :SonActius WHERE idCanso = :idCanso');
        $statement->bindValue(':idCanso', $idCanso);
        $statement->bindValue(':NomCanso', $data['NomCanso']);
        $statement->bindValue(':NomBanda', $data['NomBanda']);
        $statement->bindValue(':DataCreacio', $data['DataCreacio']);
        $statement->bindValue(':SonActius', $data['SonActius']);
        $statement->execute();
    }

    // Function to delete a metal song
    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE idCanso = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}