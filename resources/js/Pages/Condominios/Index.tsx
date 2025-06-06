import { PageProps } from '@/types';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Pencil, Trash } from 'lucide-react';

export default function Index() {
    const { condominios } = usePage<PageProps<{ condominios: any[] }>>().props;
    const { delete: destroy } = useForm();

    const handleDelete = (id: number) => {
        if (confirm('Tem certeza que deseja excluir este condomínio?')) {
            destroy(route('condominios.destroy', id));
        }
    };

    return (
        <div className="min-h-screen bg-gray-100 font-sans text-gray-800">
            {/* Header fixo */}
            <header className="sticky top-0 z-10 flex items-center justify-between bg-white px-8 py-4 shadow-sm">
                <h1 className="text-xl font-semibold text-gray-900">
                    Gerenciamento de Condomínios
                </h1>
                <Link
                    href={route('condominios.create')}
                    className="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow hover:bg-blue-500"
                >
                    + Novo Condomínio
                </Link>
            </header>

            {/* Conteúdo */}
            <main className="mx-auto max-w-6xl px-4 py-8">
                <div className="overflow-x-auto rounded-lg bg-white shadow">
                    <table className="min-w-full text-sm">
                        <thead className="bg-gray-200 text-left text-gray-700">
                            <tr>
                                <th className="px-6 py-4">Nome</th>
                                <th className="px-6 py-4">Endereço</th>
                                <th className="px-6 py-4">Responsável</th>
                                <th className="px-6 py-4">Contato</th>
                                <th className="px-6 py-4">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            {condominios.length === 0 ? (
                                <tr>
                                    <td
                                        colSpan={5}
                                        className="px-6 py-8 text-center text-gray-500"
                                    >
                                        Nenhum condomínio encontrado.
                                    </td>
                                </tr>
                            ) : (
                                condominios.map((condominio) => (
                                    <tr
                                        key={condominio.id}
                                        className="border-t hover:bg-gray-50"
                                    >
                                        <td className="px-6 py-4">
                                            {condominio.nome}
                                        </td>
                                        <td className="px-6 py-4">
                                            {condominio.endereco}
                                        </td>
                                        <td className="px-6 py-4">
                                            {condominio.responsavel}
                                        </td>
                                        <td className="px-6 py-4">
                                            {condominio.contato}
                                        </td>
                                        <td className="px-6 py-4">
                                            <div className="flex items-center gap-4">
                                                <Link
                                                    title="Editar"
                                                    href={route(
                                                        'condominios.edit',
                                                        condominio.id,
                                                    )}
                                                >
                                                    <Pencil className="h-5 w-5 text-blue-600 hover:text-blue-400" />
                                                </Link>
                                                <button
                                                    onClick={() =>
                                                        handleDelete(
                                                            condominio.id,
                                                        )
                                                    }
                                                    title="Excluir"
                                                >
                                                    <Trash className="h-5 w-5 text-red-500 hover:text-red-400" />
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                ))
                            )}
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    );
}
