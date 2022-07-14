<?php
class Producto {

    private $pdo;

    public $idProducto;
    public $descripcion;
    public $stock;
    public $nombre;
    public $precio;
    public $idCategoria;

    public function __construct()
    {
        try {
            $this -> pdo = Database::conectar();
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

			$stm = $this->pdo->prepare("SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.descripcion AS categoria FROM tb_producto p INNER JOIN tb_categoria c ON p.idCategoria = c.id WHERE activo = 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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
			$stm = $this->pdo->prepare("SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.descripcion AS categoria FROM tb_producto p INNER JOIN tb_categoria c ON p.idCategoria = c.id WHERE activo = 1 AND p.id = 1");
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
			            ->prepare("UPDATE tb_producto SET
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
			$sql = "UPDATE tb_producto SET
						nombre = ?,
						descripcion = ?,
                        precio = ?
                        stock = ?
                        idCategoria = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->descripcion,
                        $data->precio,
                        $data->stock,
                        $data->idCategoria
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function registrar(producto $data)
	{
		try
		{
		$sql = "INSERT INTO tb_producto (nombre,descripcion,precio,stock,idCategoria,activo)
		        VALUES (?, ?, ?, ?,?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->descripcion,
                    $data->precio,
                    $data->stock,
                    $data->idCategoria
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>