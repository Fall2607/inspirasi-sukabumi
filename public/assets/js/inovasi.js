document.getElementById('proposal-tab').addEventListener('click', function () {
    document.getElementById('content-proposal').classList.add('fade-in-up');
    document.getElementById('content-proposal').classList.remove('hidden');
    document.getElementById('content-penerapan').classList.add('hidden');
    this.classList.add('active');
    document.getElementById('penerapan-tab').classList.remove('active');
});

document.getElementById('penerapan-tab').addEventListener('click', function () {
    document.getElementById('content-penerapan').classList.add('fade-in-up');
    document.getElementById('content-penerapan').classList.remove('hidden');
    document.getElementById('content-proposal').classList.add('hidden');
    this.classList.add('active');
    document.getElementById('proposal-tab').classList.remove('active');
});