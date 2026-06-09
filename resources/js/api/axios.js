import axios from 'axios';

const api = axios.create({
    baseURL: '/api',
    withCredentials: true,
    headers: {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
    }
});

// Interceptor para agregar el Bearer token de Sanctum y el token CSRF
api.interceptors.request.use(config => {
    // Attach Bearer token when available (Sanctum token-based auth)
    const token = localStorage.getItem('auth_token');
    if (token) {
        config.headers['Authorization'] = `Bearer ${token}`;
    }

    // Attach CSRF token from the meta tag for Laravel's CSRF middleware
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    if (csrfToken) {
        config.headers['X-CSRF-TOKEN'] = csrfToken;
    }

    return config;
});

// Interceptor para manejar errores globalmente
api.interceptors.response.use(
    response => response,
    error => {
        if (error.response && error.response.status === 401) {
            // Token inválido o expirado: limpiar y redirigir
            localStorage.removeItem('auth_token');
            localStorage.removeItem('auth_user');
            const path = window.location.pathname;
            if (path.startsWith('/cliente') || path.startsWith('/admin')) {
                window.location.href = '/login';
            }
        }
        return Promise.reject(error);
    }
);

export default api;
