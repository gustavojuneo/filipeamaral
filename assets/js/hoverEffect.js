const addListeners = div => {
    div.addEventListener('mouseenter', () => {
        div.classList.add('hover')
    })
    div.addEventListener('mouseleave', () => {
        div.classList.remove('hover')
    })
}

const container = document.querySelector('#jobs-list')
addListeners(container)

const AllJobs = document.querySelectorAll('.job')
AllJobs.forEach(job => {
    addListeners(job)
})