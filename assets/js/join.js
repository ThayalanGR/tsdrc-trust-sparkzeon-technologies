

  //career form handler
  function _(element) {
    return document.getElementById(element)
  }


_('career-form').addEventListener("submit", event => {
    _("career-button").setAttribute("disabled", true)
    _("career-button").innerHTML = `<i class="fas fa-spinner fa-spin text-whitesa"></i>&nbsp;submitting`
    event.preventDefault()
    console.log(event)
    // console.log(event.target.elements[0].value)
    let name = event.target.elements["uname"].value
    let mname = event.target.elements["mname"].value
    let fname = event.target.elements["fname"].value
    let sex = event.target.elements["gender"].value
    let date = event.target.elements["dob"].value
    // let relegion = event.target.elements["relegion"].value
    // let community = event.target.elements["community"].value
    let marital = event.target.elements["marital"].value
    let blood = event.target.elements["blood"].value
    let education = event.target.elements["education"].value
    let occupation = event.target.elements["occupation"].value
    let contact1 = event.target.elements["mobile1"].value
    // let contact2 = event.target.elements["mobile2"].value
    let mail = event.target.elements["email"].value
    // let address = event.target.elements["address-text"].value
    let door = event.target.elements["door"].value
    let street = event.target.elements["street"].value
    let land = event.target.elements["land"].value
    let town = event.target.elements["town"].value
    let address = `${door},${street},${town},${land}`
    let district = event.target.elements["district"].value
    let state = event.target.elements["state"].value
    let country = event.target.elements["country"].value
    let pincode = event.target.elements["pincode"].value
  
  
    console.log(name, mname, fname, sex, date, marital, blood, education, occupation, contact1, mail, address, district, state, country, pincode)
    const apiUrl = `../../restapi/career.php?name=${name}&mname=${mname}&fname=${fname}&sex=${sex}&date=${date}&marital=${marital}&blood=${blood}&education=${education}&occupation=${occupation}&contact1=${contact1}&mail=${mail}&address=${address}&district=${district}&state=${state}&country=${country}&pincode=${pincode}`
    console.log(apiUrl)
    fetch(apiUrl)
      .then(resp => resp.json())
      .then(response => {
        console.log(response)
        if (response.status) {
          _("career-button").classList.remove("btn-primary")
          _("career-button").classList.add("btn-success")
          _("career-button").innerHTML = `submitted`
          setTimeout(function () {
            _("career-form").reset()
            _("career-button").removeAttribute("disabled")
            _("career-button").innerHTML = `submit`
            _("career-button").classList.remove("btn-success")
            _("career-button").classList.add("btn-primary")
            // $("#modalContactForm").modal("hide")
          }, 3000)
        }
      })
      .catch(error => console.log(error))
  
  })

