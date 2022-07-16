<?php
class Categoria {

    private $pdo;

    public $idCategoria;
    public $descripcion;

   private $categorias;

    public function __construct()
    {
        try {
			$this -> categorias = array();
			$this -> pdo = new PDO('mysql:host=localhost; dbname=bd_experiencia_digital','root',"admin"); //Database::Conectar();
        }
		catch(Exception $e) {
			die($e->getMessage());
		}
    }

    public function listar()
	{
		try
		{
			$result = array();

			// $stm = $this->pdo->prepare("SELECT id, descripcion FROM tb_categoria WHERE activo = 1");
			// $stm->execute();
			// return $stm->fetchAll(PDO::FETCH_OBJ);

			$sql="SELECT id, descripcion FROM tb_categoria WHERE estado = 1";

			foreach ($this->pdo->query($sql) as $res) {
				$this -> categorias[] = $res;
			}
			return $this -> categorias;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    
    public function obtenerPorId($idProducto)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT id, descripcion FROM tb_categoria WHERE activo = 1 AND id = 1");
			$stm->execute(array($idProducto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function eliminar($idProducto)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tb_categoria SET
                        activo = 0                        
                        WHERE id = ?");

			$stm->execute(array($idProducto));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function actualizar($data)
	{
		try
		{
			$sql = "UPDATE tb_categoria SET
						descripcion = ?,
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->descripcion,
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function registrar(Categoria $data)
	{
		try
		{
		$sql = "INSERT INTO tb_categoria (descripcion,activo)
		        VALUES (?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->descripcion,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>