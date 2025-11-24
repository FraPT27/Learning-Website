import React, { useState } from 'react';
import ReactDOM from 'react-dom';

const Dashboard = () => {
    const [chatOpen, setChatOpen] = useState(false);
    const [messages, setMessages] = useState([]);
    const [input, setInput] = useState('');

    const toggleChat = () => setChatOpen(!chatOpen);

    const sendMessage = (e) => {
        if (e.key === 'Enter' && input.trim() !== '') {
            setMessages([...messages, { sender: 'user', text: input }]);
            setInput('');
            setTimeout(() => {
                setMessages([...messages, { sender: 'user', text: input }, { sender: 'bot', text: 'Resposta automática' }]);
            }, 1000);
        }
    };

    return (
        <div className="flex h-screen">
            {/* Sidebar */}
            <aside className="w-64 bg-white shadow-lg p-4">
                <h2 className="text-lg font-semibold text-gray-800">Capítulos</h2>
                <ul>
                    <li><button className="p-2 hover:bg-gray-100 w-full text-left">Capítulo 1</button></li>
                    <li><button className="p-2 hover:bg-gray-100 w-full text-left">Capítulo 2</button></li>
                </ul>
            </aside>

            {/* Conteúdo principal */}
            <main className="flex-1 p-6">
                <h1 className="text-2xl font-semibold">Bem-vindo ao Dashboard</h1>
                <p className="text-gray-600">Escolha um capítulo para começar.</p>
            </main>

            {/* Chat */}
            <div className={`fixed bottom-0 right-4 w-64 bg-white shadow-lg border rounded-lg transition-all ${chatOpen ? 'h-80' : 'h-12'}`}>
                <div className="bg-gray-100 p-2 cursor-pointer text-center" onClick={toggleChat}>Chat</div>
                {chatOpen && (
                    <div className="p-2">
                        <div className="h-48 overflow-y-auto">
                            {messages.map((msg, index) => (
                                <div key={index} className={`p-2 my-1 ${msg.sender === 'user' ? 'text-right text-blue-600' : 'text-left text-gray-700'}`}>
                                    {msg.text}
                                </div>
                            ))}
                        </div>
                        <input 
                            type="text" 
                            className="w-full p-2 border rounded mt-2"
                            placeholder="Digite sua mensagem..."
                            value={input}
                            onChange={(e) => setInput(e.target.value)}
                            onKeyDown={sendMessage}
                        />
                    </div>
                )}
            </div>
        </div>
    );
};

// Renderizar o componente no HTML
ReactDOM.render(<Dashboard />, document.getElementById('root'));