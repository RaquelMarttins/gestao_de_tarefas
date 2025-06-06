import { PageProps, Tarefa } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { ClipboardList, Pencil, Trash } from 'lucide-react';

export default function Index() {
    const { tarefas } = usePage<PageProps<{ tarefas: Tarefa[] }>>().props;

    return (
        <div className="min-h-screen bg-gray-100 font-sans text-gray-800">
            {/* Barra superior */}
            <header className="sticky top-0 z-10 mb-8 bg-white px-8 py-5 shadow">
                <div className="mx-auto flex max-w-6xl items-center justify-between">
                    <h1 className="flex items-center gap-2 text-2xl font-bold text-pink-600">
                        <ClipboardList className="h-6 w-6" />
                        Gerenciamento de Tarefas
                    </h1>
                    <Link
                        href="/tarefas/create"
                        className="rounded-md bg-pink-500 px-4 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-pink-400"
                    >
                        ➕ Nova Tarefa
                    </Link>
                </div>
            </header>

            {/* Conteúdo principal */}
            <main className="mx-auto max-w-6xl px-4 pb-16">
                <div className="overflow-x-auto rounded-lg bg-white shadow-md">
                    <table className="min-w-full text-sm">
                        <thead className="bg-pink-100 text-left text-xs uppercase tracking-wider text-pink-700">
                            <tr>
                                <th className="px-5 py-3">Descrição</th>
                                <th className="px-5 py-3">Condomínio</th>
                                <th className="px-5 py-3">Data</th>
                                <th className="px-5 py-3">Prazo</th>
                                <th className="px-5 py-3">Prioridade</th>
                                <th className="px-5 py-3">Status</th>
                                <th className="px-5 py-3">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            {tarefas.length === 0 ? (
                                <tr>
                                    <td
                                        colSpan={7}
                                        className="px-5 py-6 text-center text-gray-500"
                                    >
                                        Nenhuma tarefa cadastrada.
                                    </td>
                                </tr>
                            ) : (
                                tarefas.map((tarefa) => (
                                    <tr
                                        key={tarefa.id}
                                        className="border-t transition hover:bg-pink-50"
                                    >
                                        <td className="px-5 py-4">
                                            {tarefa.descricao}
                                        </td>
                                        <td className="px-5 py-4">
                                            {tarefa.condominio?.nome}
                                        </td>
                                        <td className="px-5 py-4">
                                            {tarefa.data_manutencao}
                                        </td>
                                        <td className="px-5 py-4">
                                            {tarefa.prazo_meses} meses
                                        </td>
                                        <td className="px-5 py-4">
                                            {tarefa.prioridade}
                                        </td>
                                        <td className="px-5 py-4">
                                            {tarefa.status}
                                        </td>
                                        <td className="px-5 py-4">
                                            <div className="flex items-center gap-4">
                                                <Link
                                                    title="Editar"
                                                    href={`/tarefas/${tarefa.id}/edit`}
                                                >
                                                    <Pencil className="h-5 w-5 text-blue-600 hover:text-blue-400" />
                                                </Link>
                                                <form
                                                    method="POST"
                                                    action={`/tarefas/${tarefa.id}`}
                                                    onSubmit={(e) => {
                                                        e.preventDefault();
                                                        if (
                                                            confirm(
                                                                'Deseja excluir essa tarefa?',
                                                            )
                                                        ) {
                                                            (
                                                                e.target as HTMLFormElement
                                                            ).submit();
                                                        }
                                                    }}
                                                >
                                                    <input
                                                        type="hidden"
                                                        name="_method"
                                                        value="DELETE"
                                                    />
                                                    <button
                                                        type="submit"
                                                        title="Excluir"
                                                    >
                                                        <Trash className="h-5 w-5 text-red-500 hover:text-red-400" />
                                                    </button>
                                                </form>
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
