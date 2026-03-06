const API_BASE = '/api/admin';

const defaultHeaders = {
    'Accept': 'application/json',
    'X-Requested-With': 'XMLHttpRequest',
};

async function apiFetch(url, options = {}) {
    const res = await fetch(url, {
        credentials: 'include',
        headers: { ...defaultHeaders, ...options.headers },
        ...options,
    });
    const contentType = res.headers.get('Content-Type') || '';
    if (!contentType.includes('application/json')) {
        if (res.status === 401) throw new Error('Please log in again.');
        if (res.status === 419) throw new Error('Session expired. Please refresh and log in.');
        throw new Error(res.ok ? 'Invalid response from server' : `Request failed (${res.status})`);
    }
    const data = await res.json();
    if (!res.ok) throw new Error(data.message || `Request failed (${res.status})`);
    return data;
}

export async function fetchContactMessages(params = {}) {
    const q = new URLSearchParams(params).toString();
    return apiFetch(`${API_BASE}/contact-messages?${q}`);
}

export async function fetchContactMessage(id) {
    return apiFetch(`${API_BASE}/contact-messages/${id}`);
}

export async function fetchUrafRequests(params = {}) {
    const q = new URLSearchParams(params).toString();
    return apiFetch(`${API_BASE}/uraf-requests?${q}`);
}

export async function fetchUrafRequest(id) {
    return apiFetch(`${API_BASE}/uraf-requests/${id}`);
}
