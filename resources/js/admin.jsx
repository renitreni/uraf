import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route, NavLink, Outlet } from 'react-router-dom';
import ContactMessagesPage from './admin/ContactMessagesPage';
import UrafRequestsPage from './admin/UrafRequestsPage';

function getCsrfToken() {
    return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
}

function handleLogout(e) {
    e.preventDefault();
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '/logout';
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = '_token';
    input.value = getCsrfToken();
    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
}

function AdminLayout() {
    return (
        <div className="min-h-screen flex flex-col">
            <header className="bg-stone-800 text-stone-100 shadow">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-14">
                        <span className="font-semibold text-lg">Admin</span>
                        <nav className="flex items-center gap-4">
                            <NavLink
                                to="/admin"
                                end
                                className={({ isActive }) =>
                                    `px-3 py-1.5 rounded text-sm ${isActive ? 'bg-stone-600 text-white' : 'text-stone-300 hover:bg-stone-700 hover:text-white'}`
                                }
                            >
                                Dashboard
                            </NavLink>
                            <NavLink
                                to="/admin/contact-messages"
                                className={({ isActive }) =>
                                    `px-3 py-1.5 rounded text-sm ${isActive ? 'bg-stone-600 text-white' : 'text-stone-300 hover:bg-stone-700 hover:text-white'}`
                                }
                            >
                                Contact Messages
                            </NavLink>
                            <NavLink
                                to="/admin/uraf-requests"
                                className={({ isActive }) =>
                                    `px-3 py-1.5 rounded text-sm ${isActive ? 'bg-stone-600 text-white' : 'text-stone-300 hover:bg-stone-700 hover:text-white'}`
                                }
                            >
                                URAF Requests
                            </NavLink>
                            <button
                                type="button"
                                onClick={handleLogout}
                                className="px-3 py-1.5 rounded text-sm text-stone-300 hover:bg-stone-700 hover:text-white"
                            >
                                Logout
                            </button>
                        </nav>
                    </div>
                </div>
            </header>
            <main className="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <Outlet />
            </main>
        </div>
    );
}

function Dashboard() {
    return (
        <div>
            <h1 className="text-2xl font-semibold text-stone-800 mb-2">Dashboard</h1>
            <p className="text-stone-600">Use the navigation to view Contact Messages or URAF Requests.</p>
        </div>
    );
}

function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/admin" element={<AdminLayout />}>
                    <Route index element={<Dashboard />} />
                    <Route path="contact-messages" element={<ContactMessagesPage />} />
                    <Route path="uraf-requests" element={<UrafRequestsPage />} />
                </Route>
            </Routes>
        </BrowserRouter>
    );
}

const root = createRoot(document.getElementById('admin-root'));
root.render(<App />);
