function _(element) {
  return document.getElementById(element)
}



_('leave-message').addEventListener("submit", event => {
  _("leave-button").setAttribute("disabled", true)
  _("leave-button").innerHTML = `<i class="fas fa-spinner fa-spin text-whitesa"></i>&nbsp;submitting`
  event.preventDefault()
  console.log(event)
  console.log(event.target.elements[0].value)
  let name = event.target.elements["name"].value
  let email = event.target.elements["email"].value
  let subject = event.target.elements["subject"].value
  let message = event.target.elements["message"].value

  console.log(name, email, subject, message)

  const apiUrl = `../../restApi/leavemessage.php?name=${name}&email=${email}&subject=${subject}&message=${message}`
  console.log(apiUrl)
  fetch(apiUrl)
    .then(resp => resp.json())
    .then(response => {
      console.log(response)
      if (response.status) {
        _("leave-button").classList.remove("btn-primary")
        _("leave-button").classList.add("btn-success")
        _("leave-button").innerHTML = `submitted`
        setTimeout(function () {
          _("leave-message").reset()
          _("leave-button").removeAttribute("disabled")
          _("leave-button").innerHTML = `submit`
          _("leave-button").classList.remove("btn-success")
          _("leave-button").classList.add("btn-primary")
        }, 2000)
      }
    })
    .catch(error => console.log(error))

})
