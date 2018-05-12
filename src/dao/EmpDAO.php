<?php
  require_once 'src/entities/Empresa.php';
  require_once 'src/utils/Database.php';
  class EmpDAO {


    public static function add($user) {
        $db = Database::getConnection();
        $stmt = $db->prepare('INSERT INTO empresa (empresa, cnpj, endereco, num, cidade, estado) VALUES (:empresa, :cnpj, :endereco, :num, :cidade, :estado)');
        $stmt->execute(array(
          ':empresa'=> $user->getEmpresa(),
          ':cnpj'=> $user->getCnpj(),
          ':endereco'=> $user->getEndereco(),
          ':num' => $user->getNum(),
          ':cidade'=> $user->getCidade(),
          ':estado' => $user->getEstado(),
        ));
        return $stmt->rowCount();
    }

                      public static function consulta() {
                        $db = Database::getConnection();
                        $stmt = $db->prepare("SELECT * from empresa;");
                        $stmt->execute();
                        $db = null;
                        return $stmt;
                      }
                      public static function delete($emp) {
                        $db = Database::getConnection();
                        $stmt = $db->prepare("DELETE FROM empresa  WHERE id = :id;");
                        $stmt->execute(array(
                          ':id'=> $emp->getId()
                        ));
                        $db = null;
                          FlashMessage::setMessage('Empresa '. $emp->getEmpresa().' Excluida com sucesso.', FlashMessage::OK);
                          header("location:/consulta.php");
                        }

                      public static function update_empresa($user) {
                        $db = Database::getConnection();
                        $stmt = $db->prepare(' UPDATE empresa SET empresa = :empresa, cnpj = :cnpj, endereco = :endereco, num = :num, cidade= :cidade, estado =:estado  WHERE id =:id ;');               
                        $stmt->execute(array(
                          ':id'=> $user->getId(),
                          ':empresa'=> $user->getEmpresa(),
                          ':cnpj'=> $user->getCnpj(),
                          ':endereco'=> $user->getEndereco(),
                          ':num' => $user->getNum(),
                          ':cidade'=> $user->getCidade(),
                          ':estado' => $user->getEstado(),
                         ));
                        return $stmt->rowCount();
                        }            

  } 
?>

