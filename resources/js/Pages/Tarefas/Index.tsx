// import { Link, usePage } from '@inertiajs/react';

// export default function Index() {
//     const { tarefas } = usePage().props;

//     return (
//         <div>
//             <h1>Tarefas</h1>

//             <Link href="/tarefas/create" className="btn btn-primary">
//                 Nova Tarefa
//             </Link>

//             <table
//                 // border="1"
//                 cellPadding="10"
//                 cellSpacing="0"
//                 style={{ marginTop: '20px' }}
//             >
//                 <thead>
//                     <tr>
//                         <th>Descrição</th>
//                         <th>Condomínio</th>
//                         <th>Data</th>
//                         <th>Prazo</th>
//                         <th>Prioridade</th>
//                         <th>Status</th>
//                         <th>Ações</th>
//                     </tr>
//                 </thead>
//                 <tbody>
//                     {tarefas.map((tarefa) => (
//                         <tr key={tarefa.id}>
//                             <td>{tarefa.descricao}</td>
//                             <td>{tarefa.condominio?.nome}</td>
//                             <td>{tarefa.data_manutencao}</td>
//                             <td>{tarefa.prazo_meses} meses</td>
//                             <td>{tarefa.prioridade}</td>
//                             <td>{tarefa.status}</td>
//                             <td>
//                                 <Link
//                                     href={`/tarefas/${tarefa.id}/edit`}
//                                     style={{ marginRight: '10px' }}
//                                 >
//                                     Editar
//                                 </Link>
//                                 <form
//                                     method="POST"
//                                     action={`/tarefas/${tarefa.id}`}
//                                     onSubmit={(e) => {
//                                         e.preventDefault();
//                                         if (
//                                             confirm(
//                                                 'Deseja excluir essa tarefa?',
//                                             )
//                                         ) {
//                                             e.target.submit();
//                                         }
//                                     }}
//                                 >
//                                     <input
//                                         type="hidden"
//                                         name="_method"
//                                         value="DELETE"
//                                     />
//                                     <button type="submit">Excluir</button>
//                                 </form>
//                             </td>
//                         </tr>
//                     ))}
//                 </tbody>
//             </table>
//         </div>
//     );
// }
