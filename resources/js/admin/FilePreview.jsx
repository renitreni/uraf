import React, { useState } from 'react';

const IMAGE_EXT = /\.(jpe?g|png|gif|webp)$/i;
const PDF_EXT = /\.pdf$/i;

function FilePreview({ url, label }) {
    const [open, setOpen] = useState(false);
    if (!url) return <span className="text-stone-400 text-sm">—</span>;

    const isImage = IMAGE_EXT.test(url);
    const isPdf = PDF_EXT.test(url);

    return (
        <div className="inline-flex flex-col gap-1">
            <a
                href={url}
                target="_blank"
                rel="noopener noreferrer"
                className="text-sm text-stone-600 hover:text-stone-900 underline"
            >
                {label || 'View file'}
            </a>
            {isImage && (
                <>
                    <button
                        type="button"
                        onClick={() => setOpen(true)}
                        className="text-xs text-stone-500 hover:text-stone-700"
                    >
                        Preview
                    </button>
                    {open && (
                        <div className="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/70" onClick={() => setOpen(false)}>
                            <img src={url} alt="Preview" className="max-w-full max-h-full object-contain" onClick={(e) => e.stopPropagation()} />
                        </div>
                    )}
                </>
            )}
            {isPdf && (
                <>
                    <button
                        type="button"
                        onClick={() => setOpen(true)}
                        className="text-xs text-stone-500 hover:text-stone-700"
                    >
                        Preview
                    </button>
                    {open && (
                        <div className="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/70" onClick={() => setOpen(false)}>
                            <div className="bg-white rounded-lg overflow-hidden w-full max-w-4xl h-[90vh] flex flex-col" onClick={(e) => e.stopPropagation()}>
                                <div className="flex justify-end p-2 border-b">
                                    <button type="button" onClick={() => setOpen(false)} className="text-stone-600 hover:text-stone-900">Close</button>
                                </div>
                                <iframe src={url} title="PDF preview" className="flex-1 w-full min-h-0" />
                            </div>
                        </div>
                    )}
                </>
            )}
        </div>
    );
}

export default FilePreview;
