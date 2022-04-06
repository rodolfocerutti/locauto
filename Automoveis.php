<?php

Class Automoveis
{
	private $renavam;
	private $marca;
	private $modelo;
	private $placa;
	private $preco;
	
	public $con; // variável para conexão com BD
	
	// método conecta BD
	public function ConectaBD()
	{
		// ----------------------- MYSQL --------------------
		// conexão com a base de dados MySql 
		$host = "us-cdbr-east-05.cleardb.net";
		$usuario = "b27fd02e502a22";
		$senha = "0d3409a6";
		$bd = "heroku_97a40d927df1351";
		$this->con = mysqli_connect($host, $usuario, $senha, $bd);
		return $this->con;
	}
	// método inclusão
	public function Incluir()
	{
		$query = "insert into automoveis values('$this->renavam', 
		'$this->marca', '$this->modelo', 
		'$this->placa', '$this->preco')";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	// método alteração
	public function Alterar()
	{
		$query = "update automoveis set marca = '$this->marca', 
					modelo = '$this->modelo', placa = '$this->placa', 
					preco = '$this->preco' 
					where renavam = '$this->renavam'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	// método exclusão
	public function Excluir()
	{
		$query = "delete from automoveis where renavam = '$this->renavam'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	// ---- geters e seters --------

	public function getRenavam(){
        return $this->renavam;
    }
    public function setRenavam($renavam){
        $this->renavam = $renavam;
    }
    
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getPlaca(){
        return $this->placa;
    }
    public function setPlaca($placa){
        $this->placa = $placa;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
}
?>
