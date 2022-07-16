<?php
class Cliente {

    private $pdo;

    public $idCliente;
    public $nombre;
    public $apellido;
    public $direccion;
    public $dni;
    public $telefono;

	private $clientes;

    public function __construct()
    {
        try {
			$this->clientes=array();
			$this->pdo = new PDO('mysql:host=localhost; dbname=bd_experiencia_digital','root',"admin"); //Database::Conectar();
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

			//$stm = $this->pdo->prepare("SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.descripcion AS categoria FROM tb_producto p INNER JOIN tb_categoria c ON p.idCategoria = c.id WHERE activo = 1");
						//$stm->execute();
//			return $stm->fetchAll(PDO::FETCH_OBJ);
			$sql="SELECT id, nombre, apellido, direccion, dni, telefono FROM tb_cliente WHERE estado = 1";

			foreach ($this->pdo->query($sql) as $res) {
				$this->clientes[]=$res;
			}
			return $this->clientes;

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
    
    public function obtenerPorId($idCliente)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.descripcion AS categoria FROM tb_producto p INNER JOIN tb_cliente c ON p.idCategoria = c.id WHERE estado = 1 AND p.id = 1");
			$stm->execute(array($idCliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function eliminar($idCliente)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tb_cliente SET
                        activo = 0                        
                        WHERE id = ?");

			$stm->execute(array($idCliente));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function actualizar($data)
	{
		try
		{
			$sql = "UPDATE tb_cliente SET
						nombre = ?,
						apellido = ?,
                        direccion = ?
                        telefono = ?
                        dni = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->apellido,
                        $data->direccion,
                        $data->telefono,
                        $data->dni
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function registrar(Cliente $data)
	{
		try
		{
		$sql = "INSERT INTO tb_cliente (nombre,apellido,direccion, telefono, dni,activo)
		        VALUES (?, ?, ?, ?,?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
                    $data->direccion,
                    $data->telefono,
                    $data->dni
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>