$('#mode').on('click', () => {
  if ($('#light').css('display') == 'none'){
      $('#light').css('display', 'block')
      $('#night').css('display', 'none')
  } else {
      $('#light').css('display', 'none')
      $('#night').css('display', 'block')
  }
  document.body.classList.toggle('dark')
})