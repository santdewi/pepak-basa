<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase boder-bottom">
        <i class="fas fa-book-open me-2"></i> Pepak Basa
    </div>

    <div class="list-group list-group-flush my-3">
        <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('dashboard') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-home"></i>Dashboard
        </a>
        <a href="/materi" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('materi*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-folder"></i>Materi
        </a>
        <a href="/friends" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('friends') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-user-friends"></i>Friends
        </a>
        <a href="/pamasastra" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('pamasastra*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-list-alt"></i>Pamasastra
        </a>
        <a href="/krama" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('krama*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-spell-check"></i>Krama
        </a>
        <a href="/wayang" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('wayang*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-archway"></i>Wayang
        </a>
        <a href="/gamelan" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('gamelan*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-music"></i>Gamelan
        </a>
        <a href="/aksara" class="list-group-item list-group-item-action bg-transparent second-text {{ Request::is('aksara*') ? 'active' : 'fw-bold' }}">
            <i class="fas fa-edit"></i>Aksara Jawa
        </a>
    </div>
</div>

