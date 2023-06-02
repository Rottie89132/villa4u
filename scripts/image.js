window.onload = () => {
    let ImageLink = document.querySelectorAll(".link-img")
    let Link = document.querySelectorAll(".link")
    
    ImageLink.forEach(res => {
        res.onclick = (event) => {
            window.location = `./details/${event.target.id}`
        }
    })

    Link.forEach(res => {
        res.onclick = (event) => {
            window.location = `../details/${event.target.id}`
        }
    })

}