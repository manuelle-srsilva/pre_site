<?php

namespace Model;

use Exception;
use Model\Connection;

use PDO;
use PDOException;

class Comentario {
    private $db;

    public function __construct() {
        $this->db = Connection::getInstance();
    }

    public function registerComentario ($comentario, $id_cliente) {
        try {
            $sql = 'INSERT INTO comentario (comentario, id_cliente) VALUES (:comentario, :id_cliente)';

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":comentario", $comentario, PDO::PARAM_STR);
            $stmt->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);

            return $stmt->execute();
        }
        catch (PDOException $error) {
            echo "Erro ao executar o comando " . $error->getMessage();
            return false;
        }
    }

    public function getComentarioInfo ($id, $comentario, $id_cliente, $data_post) {
        try {
            $sql = "SELECT comentario FROM comentario WHERE id = :id AND comentario = :comentario AND data_post = :data_post";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":comentario", $comentario, PDO::PARAM_STR);
            $stmt->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);
            $stmt->bindParam(":data_post", $data_post, PDO::PARAM_STR);
            
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $error) {
            echo "Erro ao buscar informações: " . $error->getMessage();
            return false;
        }
    }

    public function listComentarios() {
        try{
            $sql = "SELECT c.*, cli.nome AS nome_cliente FROM comentario c JOIN cliente cli ON c.id_cliente = cli.id ORDER BY c.data_post DESC";
            return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $error) {
            echo "Erro ao carregar comentários: " . $error->getMessage();
            return false;
        }
    }

    public function updateComentario ($id, $comentario) {
        try {
            $sql = "UPDATE comentario SET comentario = :comentario WHERE id = :id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":comentario", $comentario, PDO::PARAM_STR);

            return $stmt->execute();
        }
        catch (PDOException $error) {
            echo "Erro ao executar o comando " . $error->getMessage();
            return false;
        }
    }

    public function deleteComentario ($id) {
        try {
            $sql = "DELETE FROM comentario WHERE id = :id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id, PDO::PARAM_INT);

            return $stmt->execute();
        }
        catch (PDOException $error) {
            echo "Erro ao executar o comando " . $error->getMessage();
            return false;
        }
    }

    public function countComentarios(){
        try{
            $sql = "SELECT COUNT(*) AS total FROM comentario";
            return $this->db->query($sql)->fetchColumn();
        }catch (PDOException $error){
            echo "Erro ao contar comentários: " . $error->getMessage();
            return 0;
        }
    }
}

?>