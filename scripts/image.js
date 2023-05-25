window.onload = () => {
    let ImageLink = document.querySelectorAll(".link-img")
    
    ImageLink.forEach(res => {
        res.onclick = (event) => {
            window.location = `./details/${event.target.id}`
        }
    })

}