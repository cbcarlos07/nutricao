<?php
class ConnectionFactory{
    private $ora_user = "dbaadv";
    private $ora_senha = "dbaadv";
    private $ora_bd = "(DESCRIPTION=
                        (ADDRESS_LIST=
                        (ADDRESS=(PROTOCOL=TCP)(HOST=10.51.26.63)(PORT=1521))
                        )
                        (CONNECT_DATA=
                        (SERVICE_NAME=smlmv)
                        )
                        )";

    public  function  getConnection(){
        $ora_conexao = oci_connect($this->ora_user, $this->ora_senha, $this->ora_bd);
        putenv("NLS_LANG=PORTUGUESE_BRAZIL.WE8ISO8859P1") or die("Falha ao inserir a variavel de ambiente");
        return $ora_conexao;

    }

    public function closeConnection($connection){
        $ora_conexao = oci_close($connection);

    }


}

?>