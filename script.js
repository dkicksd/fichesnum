document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('note-form');
    const notesSection = document.getElementById('notes');
    const aiBtn = document.getElementById('ai-btn');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const title = document.getElementById('title').value;
        const content = document.getElementById('content').value;
        addNote(title, content);
        form.reset();
    });

    aiBtn.addEventListener('click', async () => {
        const content = document.getElementById('content').value;
        const response = await fetch('generate.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ text: content })
        });
        if (response.ok) {
            const data = await response.json();
            document.getElementById('content').value = data.suggestion;
        }
    });

    function addNote(title, content) {
        const div = document.createElement('div');
        div.className = 'note';
        div.innerHTML = `<h3>${title}</h3><p>${content}</p>`;
        notesSection.appendChild(div);
    }
});
