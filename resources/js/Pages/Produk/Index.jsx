import React from 'react';
import { Head } from '@inertiajs/react';

export default function Index({ produks }) {
    return (
        <div className="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <Head title="Daftar Produk" />
            
            <div className="max-w-4xl mx-auto">
                <div className="flex justify-between items-center mb-6">
                    <h1 className="text-3xl font-extrabold text-gray-900">
                        Manajemen Inventaris
                    </h1>
                    <span className="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                        Arch Linux Native
                    </span>
                </div>

                <div className="bg-white shadow overflow-hidden sm:rounded-md">
                    <table className="min-w-full divide-y divide-gray-200">
                        <thead className="bg-gray-50">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Produk</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Supplier</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200">
                            {produks.length > 0 ? (
                                produks.map((produk) => (
                                    <tr key={produk.id} className="hover:bg-gray-50 transition-colors">
                                        <td className="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {produk.nama_produk}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {produk.supplier?.nama_supplier || 'Tanpa Supplier'}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-bold">
                                            Rp {new Intl.NumberFormat('id-ID').format(produk.harga)}
                                        </td>
                                    </tr>
                                ))
                            ) : (
                                <tr>
                                    <td colSpan="3" className="px-6 py-10 text-center text-gray-500">
                                        Belum ada data. Silakan isi via Tinker atau Seeder.
                                    </td>
                                </tr>
                            )}
                        </tbody>
                    </table>
                </div>
                
                <p className="mt-4 text-sm text-gray-400 text-center">
                    Tugas Database ERD - One to Many Relationship
                </p>
            </div>
        </div>
    );
}