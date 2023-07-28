const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="mensaje"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))