const VerMas = document.getElementById('more')
  const VerMenos = document.getElementById('menos')
  const activar = document.getElementById('container1')
  VerMas.addEventListener('click',() =>{
    activar.style.display = "block"
    VerMas.style.display = "none"
    VerMenos.style.display = "block"
  })
  VerMenos.addEventListener('click', ()=>{
      activar.style.display = "none"
      VerMenos.style.display = "none"
      VerMas.style.display = "block"
  })