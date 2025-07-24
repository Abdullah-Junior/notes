document.getElementById("saveButton").addEventListener("click", function() {
    var noteText = document.getElementById("noteArea").value;
    if (noteText.trim() !== "") {
        var noteList = document.getElementById("noteList");
        var newNote = document.createElement("li");
        newNote.textContent = noteText;
        noteList.appendChild(newNote);
        document.getElementById("noteArea").value = ""; // Clear the textarea
    } else {
        alert("Please type something before saving.");
    }
});
