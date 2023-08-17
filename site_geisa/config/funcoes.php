<?php

include_once 'conexao.php';


//TRABALHE CONOSCO

function tbtrab($a, $b, $c, $d, $e)
{
    $conn = conectar();
    $lista = $conn->prepare("INSERT INTO tbtrab (nome, email, telefone, areaint, mensagem) VALUES ('$a','$b','$c','$d','$e')");
    $lista->execute();
    if ($lista->rowCount() > 0) {
        return 'True';
    } else {
        return 'False';
    }
}

function tbcurri($a)
{
    $conn = conectar();
    $lista = $conn->prepare("INSERT INTO tbcurri (curriculo) VALUES ('$a')");
    $lista->execute();
    if ($lista->rowCount() > 0) {
        return 'True';
    } else {
        return 'False';
    }
}



// listar registros

function listarRegistroDoisParametro($tabela, $campos, $idcampo, $idparametro, $idCampo2, $idparametro2, $ativo)
{
    $conn = conectar();
    try {
        if (is_numeric($idparametro)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND $idCampo2 = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_INT);
            $sqlLista->bindValue(2, $idparametro2, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            };
        } else {
            return 'Variável Não é aceita!';
        }
        // } catch (PDOException $e) {
        //     echo 'Exception -> ';
        //     return ($e->getMessage());
        // };
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
}

function listarRegistroUmParametro($tabela, $campos, $idcampo, $idparametro, $ativo)
{
    $conn = conectar();
    try {
        if (is_numeric($idparametro)) {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_INT);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            };
        } else {
            return 'Variável Não é aceita!';
        }
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
}

function listarRegistroUmParametro2($tabela, $campos, $idcampo, $idparametro, $ativo)
{
    $conn = conectar();
    try {
            $conn->beginTransaction();
            $sqlLista = $conn->prepare("SELECT $campos "
                . "FROM $tabela "
                . "WHERE $idcampo = ? AND ativo = '$ativo' ");
            $sqlLista->bindValue(1, $idparametro, PDO::PARAM_STR);
            $sqlLista->execute();
            if ($sqlLista->rowCount() > 0) {
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            } else {
                return false;
            };
        } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
}

function listarRegistrosJoin($campos, $tabela, $join, $tabela2, $id, $ativo)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela $join JOIN $tabela2 ON $tabela.$id = $tabela2.$id AND $tabela.ativo = ? AND $tabela2.ativo = ?");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        };
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
};

function listarRegistrosJoin2($campos, $tabela, $join, $tabela2, $id, $join2, $tabela3, $id2, $ativo)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela $join JOIN $tabela2 ON $tabela.$id = $tabela2.$id $join2 JOIN $tabela3 ON $tabela2.$id2 = $tabela3.$id2 AND $tabela.ativo = ? AND $tabela2.ativo = ? AND $tabela3.ativo = ?");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $ativo, PDO::PARAM_STR);
        $sqlLista->bindValue(3, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return false;
        };
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
};



function listarTodosRegistros($tabela, $campos, $ativo)
{
$conn = conectar();
try {
$sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = '$ativo' ");
$sqlLista->execute();
if ($sqlLista->rowCount() > 0) {
return $sqlLista->fetchAll(PDO::FETCH_OBJ);
} else {
return false;
};
} catch (PDOException $e) {
echo 'Exception -> ';
return ($e->getMessage());
};
}

// inserir registros
function inserirRegistros($tabela, $campos, $valores){
    $conn = conectar();
    try {
            $sqlLista = $conn->prepare("INSERT INTO  $tabela ($campos) VALUES ($valores, NOW())");
            $resul = $sqlLista->execute();
            if($resul == false){
                $conn->rollBack();
                return false;
        } else {
            return true;        
        };
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
};

function inserirRegistrosReturnId($tabela, $campos, $valores){
    $conn = conectar();
    try {
            $sqlLista = $conn->prepare("INSERT INTO  $tabela ($campos) VALUES ($valores, NOW())");
            $resul = $sqlLista->execute();
            if($resul == false){
                $conn->rollBack();
                return false;
        } else {
            $id = $conn->lastInsertId();
            return $id;        
        };
    } catch (PDOException $e) {
        return 'Não foi possível acessar os dados. Erro: ' . $e->getMessage();
    };
};


///LOGIN
// function login($email, $senha){
// $login = 0;
// $conn = conectar();
// $lista = $conn->query("SELECT email, senha FROM tbpessoas WHERE (email = '$email') AND (senha = '$senha')");
// $lista->execute();
// if ($lista->rowCount() > 0) {
// $login = 1;
// return $login;
// } else {
// return $login;
// }
// }


// function user($a){
// $conn = conectar();
// $lista = $conn->query("SELECT * FROM tbpessoas WHERE email = ('$a')");
// $lista->execute();
// if ($lista->rowCount() > 0) {
// return $lista->fetchAll(PDO::FETCH_OBJ);
// } else {
// return 'A lista está vazia.';
// }
// }





///CADASTRO
// function ver($email){
// $cad = 0;
// $conn = conectar();
// $lista = $conn->query("SELECT email FROM tbpessoas WHERE email = ('$email')");
// $lista->execute();
// if ($lista->rowCount() > 0) {
// $cad = 1;
// return $cad;
// } else {
// return $cad;
// }
// }

// function tbp($idgen, $nome, $snome, $email, $senha){
// $conn = conectar();
// $lista = $conn->prepare("INSERT INTO tbpessoas (idgenero, nome, sobrenome, email, senha) VALUES ('$idgen','$nome','$snome','$email','$senha')");
// $lista->execute();
// if ($lista->rowCount() > 0) {
// return 'True';
// } else {
// return 'False';
// }
// }
