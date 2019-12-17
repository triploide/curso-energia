import React, { Component } from 'react';
import './App.css';
import TodoList from './TodoList';

class App extends Component {
	items = [
		{
			id: 1,
			title: 'Hacer H',
			completed: false
		},
		{
			id: 2,
			title: 'Hacer B',
			completed: true
		}
	]

	otrosItems = [
		{
			id: 1,
			title: 'Lorem',
			completed: false
		},
		{
			id: 2,
			title: 'Ipsum',
			completed: false
		}
	]

	render() {
		return (
		    <div className="App" style={ {backgroundColor: '#e6e6e6'} }>
		      <h1>Hola React</h1>
		      <TodoList items={this.items} />
		      
		      <TodoList items={this.otrosItems} />
		    </div>
		);
	}
}

export default App;
