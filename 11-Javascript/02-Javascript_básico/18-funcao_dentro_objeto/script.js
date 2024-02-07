let pessoa = {
  nome: "Lucas",
  sobrenome: "Tenório",
  idade: 29,
  nomeCompleto: function(){
    return this.nome + ' ' + this.sobrenome;
  }
}

console.log(pessoa.nomeCompleto());