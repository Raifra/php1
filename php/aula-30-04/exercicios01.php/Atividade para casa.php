<?php

$varAluno= array("João", "Maria", "Fernanda");
$varIdade=array("João"=> 19, "Maria"=>16, "Fernanda"=> 17);
$varCPF=array("João"=>333, "Maria"=>123, "Fernanda"=>555);
$varEnde=array("João"=>"Rua 7 de Setembro", "Maria"=>"Rua 8 de Dezembro", "Fernanda"=>"Rua Do Ex");
$varCida=array("João"=>"Guanambi", "Maria"=>"Cauderão", "Fernanda"=>"Cacule");
$varEstad=array("João"=>"Bahia", "Maria"=>"Bahia", "Fernanda"=>"Bahia");

echo "Aluno 1<br><br>";
echo "Nome: $varAluno[0]. <br> Idade: $varIdade[João] anos. <br> Número do CPF: $varCPF[João].<br> Reside:$varEnde[João]/$varCida[João]/$varEstad[João]<br>";

echo "<br>";

echo "Aluno 2<br><br>";
echo "Nome: $varAluno[1]. <br> Idade: $varIdade[Maria] anos.<br> Número do CPF: $varCPF[Maria]. <br> Reside: $varEnde[Maria]/$varCida[Maria]/$varEstad[Maria]<br>";

echo "<br>";

echo "Aluno 3<br><br>";
echo "Nome: $varAluno[2]. <br> Idade: $varIdade[Fernanda] anos. <br> Número do CPF: $varCPF[Fernanda]. <br> Reside: $varEnde[Fernanda]/$varCida[Fernanda]/$varEstad[Fernanda]<br>";

echo "<br>";

$varProfessor=array("Fábio");
$varIdade=array("Fábio"=>33);
$varCPF=array("Fábio"=>259);
$varEnde=array("Fábio"=>"Rua da Baixa da Egua");
$varCida=array("Fábio"=>"Guanambi");
$varEstad=array("Fábio"=>"Bahia");

echo "Professor da disciplina de PSW<br><br>";
echo "Nome: $varProfessor[0]. <br> Idade: $varIdade[Fábio] anos. <br> Número do CPF: $varCPF[Fábio]. <br> Reside: $varEnde[Fábio]/$varCida[Fábio]/$varEstad[Fábio]<br>";




?>