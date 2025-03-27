function showProfile(profileId) {
    const profiles = document.querySelectorAll('.profile-content');
    profiles.forEach(profile => {
        profile.style.display = 'none';
    });
    document.getElementById(profileId).style.display = 'block';
}
