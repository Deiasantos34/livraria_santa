<?php
    require('conection.php');
    function read(){
        $conn = getConnection();

        $sql  = 'SELECT * FROM livro';

        $stmt = $conn ->prepare($sql);

        $stmt-> execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    function create(){
    $conn = getConnection();

    $sql  = 'INSERT INTO livro (nome, paginas, autor, quantidade, preco) VALUES (?, ?, ?, ?, ?)';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['paginas']);
    $stmt->bindParam(3, $_POST['autor']);
    $stmt->bindParam(4, $_POST['quantidade']);
    $stmt->bindParam(5, $_POST['preco']);

    if($stmt->execute()){
        return('salvo com susesso!');
    }else {
        return('erro ao salvar');
    }

}

function update($id){
    $conn = getConnection();

    $sql  = 'UPDATE livro SET nome = ?, paginas = ?, autor = ?, quantidade = ?, preco = ? WHERE id = ?';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['paginas']);
    $stmt->bindParam(3, $_POST['autor']);
    $stmt->bindParam(4, $_POST['quantidade']);
    $stmt->bindParam(5, $_POST['preco']);
    $stmt->bindParam(6, $id);

    if($stmt->execute()){
        return('atualizado com susesso!');
    }else {
        return('erro ao atualizar');
    }
}

function delete($id){
    $conn = getConnection();

    $sql  = 'DELETE FROM livro WHERE id = ?';

    $stmt = $conn ->prepare($sql);
    $stmt ->bindParam(1, $id);

    try{
        $stmt->execute();
        return 'deletado com sucesso';
    }catch(PDOException $e){
        return $e -> getMessage();
    }
}

function readWhere($id){
    $conn = getConnection();

    $sql  = 'SELECT * FROM livro WHERE id = ?';

    $stmt = $conn ->prepare($sql);
    $stmt->bindParam(1, $id);

    $stmt-> execute();

    $result = $stmt->fetchAll();
    return $result;
}
?>