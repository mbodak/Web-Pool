
function addTask() {

    var text = prompt("Add the task, please");
    if (text.length !== 0 && !(/^\s+$/.test(text)))
    {
        var div = document.createElement('div');
        div.className = "tod";
        div.setAttribute('onclick','delTask(this)');
        div.appendChild(document.createTextNode(text));
        ft_list.insertBefore(div, ft_list.firstChild);
    }
}

function delTask(div) {

    if (confirm("Are you really want to delete this task?"))
        div.remove();
}