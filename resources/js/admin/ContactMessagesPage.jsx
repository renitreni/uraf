import React, { useState, useEffect, useCallback } from 'react';
import { fetchContactMessages, fetchContactMessage } from './api';

function ContactMessagesPage() {
    const [data, setData] = useState({ data: [], current_page: 1, last_page: 1, total: 0 });
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [filters, setFilters] = useState({ search: '', name: '', email: '', subject: '', from_date: '', to_date: '', per_page: 15 });
    const [detailId, setDetailId] = useState(null);
    const [detail, setDetail] = useState(null);

    const load = useCallback(async (page = 1) => {
        setLoading(true);
        setError(null);
        try {
            const params = { page, per_page: filters.per_page };
            if (filters.search) params.search = filters.search;
            if (filters.name) params.name = filters.name;
            if (filters.email) params.email = filters.email;
            if (filters.subject) params.subject = filters.subject;
            if (filters.from_date) params.from_date = filters.from_date;
            if (filters.to_date) params.to_date = filters.to_date;
            const res = await fetchContactMessages(params);
            setData(res);
        } catch (e) {
            setError(e.message);
        } finally {
            setLoading(false);
        }
    }, [filters]);

    useEffect(() => {
        load(1);
    }, [filters.per_page]);

    useEffect(() => {
        if (detailId == null) {
            setDetail(null);
            return;
        }
        fetchContactMessage(detailId).then(setDetail).catch(() => setDetail(null));
    }, [detailId]);

    const applyFilters = (e) => {
        e.preventDefault();
        load(1);
    };

    const updateFilter = (key, value) => {
        setFilters((f) => ({ ...f, [key]: value }));
    };

    return (
        <div>
            <h1 className="text-2xl font-semibold text-stone-800 mb-6">Contact Messages</h1>

            <form onSubmit={applyFilters} className="mb-6 p-4 bg-white rounded-xl shadow-sm border border-stone-200 space-y-3">
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                    <input
                        type="text"
                        placeholder="Search all..."
                        value={filters.search}
                        onChange={(e) => updateFilter('search', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <input
                        type="text"
                        placeholder="Name"
                        value={filters.name}
                        onChange={(e) => updateFilter('name', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <input
                        type="text"
                        placeholder="Email"
                        value={filters.email}
                        onChange={(e) => updateFilter('email', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <input
                        type="text"
                        placeholder="Subject"
                        value={filters.subject}
                        onChange={(e) => updateFilter('subject', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <input
                        type="date"
                        placeholder="From date"
                        value={filters.from_date}
                        onChange={(e) => updateFilter('from_date', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <input
                        type="date"
                        placeholder="To date"
                        value={filters.to_date}
                        onChange={(e) => updateFilter('to_date', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    />
                    <select
                        value={filters.per_page}
                        onChange={(e) => updateFilter('per_page', e.target.value)}
                        className="rounded-lg border border-stone-300 px-3 py-2 text-sm"
                    >
                        <option value={10}>10 per page</option>
                        <option value={15}>15 per page</option>
                        <option value={25}>25 per page</option>
                        <option value={50}>50 per page</option>
                    </select>
                    <button type="submit" className="rounded-lg bg-stone-700 text-white px-4 py-2 text-sm font-medium hover:bg-stone-600">
                        Apply filters
                    </button>
                </div>
            </form>

            {error && (
                <div className="mb-4 p-3 bg-red-100 text-red-800 rounded-lg text-sm">{error}</div>
            )}

            <div className="bg-white rounded-xl shadow-sm border border-stone-200 overflow-hidden">
                {loading ? (
                    <div className="p-8 text-center text-stone-500">Loading...</div>
                ) : (
                    <>
                        <div className="overflow-x-auto">
                            <table className="min-w-full divide-y divide-stone-200">
                                <thead className="bg-stone-50">
                                    <tr>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">ID</th>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">Name</th>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">Email</th>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">Subject</th>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">Date</th>
                                        <th className="px-4 py-3 text-left text-xs font-medium text-stone-600 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="divide-y divide-stone-200">
                                    {data.data.map((row) => (
                                        <tr key={row.id} className="hover:bg-stone-50">
                                            <td className="px-4 py-3 text-sm text-stone-700">{row.id}</td>
                                            <td className="px-4 py-3 text-sm text-stone-800">{row.name}</td>
                                            <td className="px-4 py-3 text-sm text-stone-700">{row.email}</td>
                                            <td className="px-4 py-3 text-sm text-stone-700 max-w-[200px] truncate" title={row.subject}>{row.subject}</td>
                                            <td className="px-4 py-3 text-sm text-stone-600">{new Date(row.created_at).toLocaleDateString()}</td>
                                            <td className="px-4 py-3">
                                                <button
                                                    type="button"
                                                    onClick={() => setDetailId(row.id)}
                                                    className="text-sm text-stone-600 hover:text-stone-900 underline"
                                                >
                                                    View details
                                                </button>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                        {data.data.length === 0 && (
                            <div className="p-8 text-center text-stone-500">No messages found.</div>
                        )}
                        {data.last_page > 1 && (
                            <div className="px-4 py-3 border-t border-stone-200 flex items-center justify-between">
                                <span className="text-sm text-stone-600">
                                    Page {data.current_page} of {data.last_page} ({data.total} total)
                                </span>
                                <div className="flex gap-2">
                                    <button
                                        type="button"
                                        disabled={data.current_page <= 1}
                                        onClick={() => load(data.current_page - 1)}
                                        className="px-3 py-1 rounded border border-stone-300 text-sm disabled:opacity-50 hover:bg-stone-100"
                                    >
                                        Previous
                                    </button>
                                    <button
                                        type="button"
                                        disabled={data.current_page >= data.last_page}
                                        onClick={() => load(data.current_page + 1)}
                                        className="px-3 py-1 rounded border border-stone-300 text-sm disabled:opacity-50 hover:bg-stone-100"
                                    >
                                        Next
                                    </button>
                                </div>
                            </div>
                        )}
                    </>
                )}
            </div>

            {detailId != null && (
                <div className="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50" onClick={() => setDetailId(null)}>
                    <div className="bg-white rounded-xl shadow-xl max-w-lg w-full max-h-[90vh] overflow-auto p-6" onClick={(e) => e.stopPropagation()}>
                        <div className="flex justify-between items-start mb-4">
                            <h2 className="text-lg font-semibold text-stone-800">Message details</h2>
                            <button type="button" onClick={() => setDetailId(null)} className="text-stone-500 hover:text-stone-800 text-xl leading-none">&times;</button>
                        </div>
                        {detail ? (
                            <dl className="space-y-3 text-sm">
                                <div><dt className="font-medium text-stone-500">ID</dt><dd className="text-stone-800">{detail.id}</dd></div>
                                <div><dt className="font-medium text-stone-500">Name</dt><dd className="text-stone-800">{detail.name}</dd></div>
                                <div><dt className="font-medium text-stone-500">Email</dt><dd className="text-stone-800">{detail.email}</dd></div>
                                <div><dt className="font-medium text-stone-500">Subject</dt><dd className="text-stone-800">{detail.subject}</dd></div>
                                <div><dt className="font-medium text-stone-500">Message</dt><dd className="text-stone-800 whitespace-pre-wrap mt-1">{detail.message}</dd></div>
                                <div><dt className="font-medium text-stone-500">Date</dt><dd className="text-stone-800">{new Date(detail.created_at).toLocaleString()}</dd></div>
                            </dl>
                        ) : (
                            <p className="text-stone-500">Loading...</p>
                        )}
                    </div>
                </div>
            )}
        </div>
    );
}

export default ContactMessagesPage;
