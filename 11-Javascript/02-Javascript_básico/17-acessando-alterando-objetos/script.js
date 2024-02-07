// let personagem = {
//   nome: "Lucas",
//   idade: 29,
//   pais: "Brasil",
//   olhos:['preto','azul'],
//   caracteristicas:{
//     forca: 20,
//     magia: 5,
//     stamina: 15
//   }
// }

// personagem.nome = "Thauanna"
// console.log(personagem.nome);

// personagem.caracteristicas.forca += 5;
// console.log("Força : " + personagem.caracteristicas.forca)

// personagem.olhos.push("Verde");
//console.log(personagem.olhos[2]);

let personagem = {
  nome: "Lucas",
  idade: 29,
  carros: [
    {modelo: 'fiat', cor: 'preto'},
    {modelo: 'Ferrari', cor: 'Vermelho'}
  ]
}

console.log(personagem.carros[0].cor);