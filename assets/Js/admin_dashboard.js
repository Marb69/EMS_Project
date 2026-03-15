export const admin_dashboard = ()=>{

      const links = document.querySelectorAll('.nav-item');
  links.forEach(link => {
    link.classList.remove('active');
    if (link.href === window.location.href) {
      link.classList.add('active');
    }
  });
 

  const toggle  = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');
  toggle?.addEventListener('click', () =>{

     sidebar.classList.toggle('open')
    
  } );
 

  document.addEventListener('click', e => {
    if (window.innerWidth <= 768 && sidebar.classList.contains('open') &&
        !sidebar.contains(e.target) && e.target !== toggle) {
      sidebar.classList.remove('open');
    }
  });
}