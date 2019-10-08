<?php


 class Documento{

	private $numero;

	public function getNumero()
	{ 
		return $this ->numero;

	}
	public function setNumero($n)
	{
			$this->numero= $n;

	}

}

		class CPF extends Documento{

			public function validar():bool
			{
				//validação CPF
				return true;

			}
		}
		$doc = new CPF();
		$doc ->setNumero("123458756-88");
		$doc ->validar();

var_dump($doc->validar());
echo "<br/>";
echo $doc ->getNumero();










?>