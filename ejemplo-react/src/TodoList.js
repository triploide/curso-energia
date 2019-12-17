import React, { Component } from 'react';
import './App.css';
import TodoItem from './TodoItem'

class TodoList extends Component {

  render() {
      return (
        <ol>
          { 
            this.props.items.map( item  => <TodoItem key={ item.id } item={ item } />)
          }
        </ol>
      );
  }
}

export default TodoList;
