// This file is auto-generated, don't edit it. Thanks.
package client

import (
	endpointutil "github.com/alibabacloud-go/endpoint-util/service"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	"github.com/alibabacloud-go/tea/tea"
)

type DescribeAllDataSourceRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty"`
}

func (s DescribeAllDataSourceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceRequest) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceRequest) SetDBClusterId(v string) *DescribeAllDataSourceRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourceRequest) SetSchemaName(v string) *DescribeAllDataSourceRequest {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourceRequest) SetTableName(v string) *DescribeAllDataSourceRequest {
	s.TableName = &v
	return s
}

type DescribeAllDataSourceResponse struct {
	RequestId *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Schemas   *DescribeAllDataSourceResponseSchemas `json:"Schemas,omitempty" xml:"Schemas,omitempty" require:"true" type:"Struct"`
	Tables    *DescribeAllDataSourceResponseTables  `json:"Tables,omitempty" xml:"Tables,omitempty" require:"true" type:"Struct"`
	Columns   *DescribeAllDataSourceResponseColumns `json:"Columns,omitempty" xml:"Columns,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAllDataSourceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponse) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponse) SetRequestId(v string) *DescribeAllDataSourceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAllDataSourceResponse) SetSchemas(v *DescribeAllDataSourceResponseSchemas) *DescribeAllDataSourceResponse {
	s.Schemas = v
	return s
}

func (s *DescribeAllDataSourceResponse) SetTables(v *DescribeAllDataSourceResponseTables) *DescribeAllDataSourceResponse {
	s.Tables = v
	return s
}

func (s *DescribeAllDataSourceResponse) SetColumns(v *DescribeAllDataSourceResponseColumns) *DescribeAllDataSourceResponse {
	s.Columns = v
	return s
}

type DescribeAllDataSourceResponseSchemas struct {
	Schema []*DescribeAllDataSourceResponseSchemasSchema `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourceResponseSchemas) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseSchemas) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseSchemas) SetSchema(v []*DescribeAllDataSourceResponseSchemasSchema) *DescribeAllDataSourceResponseSchemas {
	s.Schema = v
	return s
}

type DescribeAllDataSourceResponseSchemasSchema struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
}

func (s DescribeAllDataSourceResponseSchemasSchema) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseSchemasSchema) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseSchemasSchema) SetDBClusterId(v string) *DescribeAllDataSourceResponseSchemasSchema {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourceResponseSchemasSchema) SetSchemaName(v string) *DescribeAllDataSourceResponseSchemasSchema {
	s.SchemaName = &v
	return s
}

type DescribeAllDataSourceResponseTables struct {
	Table []*DescribeAllDataSourceResponseTablesTable `json:"Table,omitempty" xml:"Table,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourceResponseTables) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseTables) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseTables) SetTable(v []*DescribeAllDataSourceResponseTablesTable) *DescribeAllDataSourceResponseTables {
	s.Table = v
	return s
}

type DescribeAllDataSourceResponseTablesTable struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s DescribeAllDataSourceResponseTablesTable) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseTablesTable) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseTablesTable) SetDBClusterId(v string) *DescribeAllDataSourceResponseTablesTable {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourceResponseTablesTable) SetSchemaName(v string) *DescribeAllDataSourceResponseTablesTable {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourceResponseTablesTable) SetTableName(v string) *DescribeAllDataSourceResponseTablesTable {
	s.TableName = &v
	return s
}

type DescribeAllDataSourceResponseColumns struct {
	Column []*DescribeAllDataSourceResponseColumnsColumn `json:"Column,omitempty" xml:"Column,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourceResponseColumns) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseColumns) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseColumns) SetColumn(v []*DescribeAllDataSourceResponseColumnsColumn) *DescribeAllDataSourceResponseColumns {
	s.Column = v
	return s
}

type DescribeAllDataSourceResponseColumnsColumn struct {
	DBClusterId         *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName          *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName           *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	ColumnName          *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	Type                *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	PrimaryKey          *bool   `json:"PrimaryKey,omitempty" xml:"PrimaryKey,omitempty" require:"true"`
	AutoIncrementColumn *bool   `json:"AutoIncrementColumn,omitempty" xml:"AutoIncrementColumn,omitempty" require:"true"`
}

func (s DescribeAllDataSourceResponseColumnsColumn) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourceResponseColumnsColumn) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetDBClusterId(v string) *DescribeAllDataSourceResponseColumnsColumn {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetSchemaName(v string) *DescribeAllDataSourceResponseColumnsColumn {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetTableName(v string) *DescribeAllDataSourceResponseColumnsColumn {
	s.TableName = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetColumnName(v string) *DescribeAllDataSourceResponseColumnsColumn {
	s.ColumnName = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetType(v string) *DescribeAllDataSourceResponseColumnsColumn {
	s.Type = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetPrimaryKey(v bool) *DescribeAllDataSourceResponseColumnsColumn {
	s.PrimaryKey = &v
	return s
}

func (s *DescribeAllDataSourceResponseColumnsColumn) SetAutoIncrementColumn(v bool) *DescribeAllDataSourceResponseColumnsColumn {
	s.AutoIncrementColumn = &v
	return s
}

type DescribeColumnsRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s DescribeColumnsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeColumnsRequest) GoString() string {
	return s.String()
}

func (s *DescribeColumnsRequest) SetDBClusterId(v string) *DescribeColumnsRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeColumnsRequest) SetSchemaName(v string) *DescribeColumnsRequest {
	s.SchemaName = &v
	return s
}

func (s *DescribeColumnsRequest) SetTableName(v string) *DescribeColumnsRequest {
	s.TableName = &v
	return s
}

type DescribeColumnsResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Items     *DescribeColumnsResponseItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s DescribeColumnsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeColumnsResponse) GoString() string {
	return s.String()
}

func (s *DescribeColumnsResponse) SetRequestId(v string) *DescribeColumnsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeColumnsResponse) SetItems(v *DescribeColumnsResponseItems) *DescribeColumnsResponse {
	s.Items = v
	return s
}

type DescribeColumnsResponseItems struct {
	Column []*DescribeColumnsResponseItemsColumn `json:"Column,omitempty" xml:"Column,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeColumnsResponseItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeColumnsResponseItems) GoString() string {
	return s.String()
}

func (s *DescribeColumnsResponseItems) SetColumn(v []*DescribeColumnsResponseItemsColumn) *DescribeColumnsResponseItems {
	s.Column = v
	return s
}

type DescribeColumnsResponseItemsColumn struct {
	DBClusterId         *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName          *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName           *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	ColumnName          *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	Type                *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	PrimaryKey          *bool   `json:"PrimaryKey,omitempty" xml:"PrimaryKey,omitempty" require:"true"`
	AutoIncrementColumn *bool   `json:"AutoIncrementColumn,omitempty" xml:"AutoIncrementColumn,omitempty" require:"true"`
}

func (s DescribeColumnsResponseItemsColumn) String() string {
	return tea.Prettify(s)
}

func (s DescribeColumnsResponseItemsColumn) GoString() string {
	return s.String()
}

func (s *DescribeColumnsResponseItemsColumn) SetDBClusterId(v string) *DescribeColumnsResponseItemsColumn {
	s.DBClusterId = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetSchemaName(v string) *DescribeColumnsResponseItemsColumn {
	s.SchemaName = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetTableName(v string) *DescribeColumnsResponseItemsColumn {
	s.TableName = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetColumnName(v string) *DescribeColumnsResponseItemsColumn {
	s.ColumnName = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetType(v string) *DescribeColumnsResponseItemsColumn {
	s.Type = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetPrimaryKey(v bool) *DescribeColumnsResponseItemsColumn {
	s.PrimaryKey = &v
	return s
}

func (s *DescribeColumnsResponseItemsColumn) SetAutoIncrementColumn(v bool) *DescribeColumnsResponseItemsColumn {
	s.AutoIncrementColumn = &v
	return s
}

type DescribeTablesRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty"`
}

func (s DescribeTablesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeTablesRequest) GoString() string {
	return s.String()
}

func (s *DescribeTablesRequest) SetDBClusterId(v string) *DescribeTablesRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeTablesRequest) SetSchemaName(v string) *DescribeTablesRequest {
	s.SchemaName = &v
	return s
}

func (s *DescribeTablesRequest) SetTableName(v string) *DescribeTablesRequest {
	s.TableName = &v
	return s
}

type DescribeTablesResponse struct {
	RequestId *string                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Items     *DescribeTablesResponseItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s DescribeTablesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeTablesResponse) GoString() string {
	return s.String()
}

func (s *DescribeTablesResponse) SetRequestId(v string) *DescribeTablesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeTablesResponse) SetItems(v *DescribeTablesResponseItems) *DescribeTablesResponse {
	s.Items = v
	return s
}

type DescribeTablesResponseItems struct {
	Table []*DescribeTablesResponseItemsTable `json:"Table,omitempty" xml:"Table,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeTablesResponseItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeTablesResponseItems) GoString() string {
	return s.String()
}

func (s *DescribeTablesResponseItems) SetTable(v []*DescribeTablesResponseItemsTable) *DescribeTablesResponseItems {
	s.Table = v
	return s
}

type DescribeTablesResponseItemsTable struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s DescribeTablesResponseItemsTable) String() string {
	return tea.Prettify(s)
}

func (s DescribeTablesResponseItemsTable) GoString() string {
	return s.String()
}

func (s *DescribeTablesResponseItemsTable) SetDBClusterId(v string) *DescribeTablesResponseItemsTable {
	s.DBClusterId = &v
	return s
}

func (s *DescribeTablesResponseItemsTable) SetSchemaName(v string) *DescribeTablesResponseItemsTable {
	s.SchemaName = &v
	return s
}

func (s *DescribeTablesResponseItemsTable) SetTableName(v string) *DescribeTablesResponseItemsTable {
	s.TableName = &v
	return s
}

type DescribeSchemasRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty"`
}

func (s DescribeSchemasRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeSchemasRequest) GoString() string {
	return s.String()
}

func (s *DescribeSchemasRequest) SetDBClusterId(v string) *DescribeSchemasRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeSchemasRequest) SetSchemaName(v string) *DescribeSchemasRequest {
	s.SchemaName = &v
	return s
}

func (s *DescribeSchemasRequest) SetTableName(v string) *DescribeSchemasRequest {
	s.TableName = &v
	return s
}

type DescribeSchemasResponse struct {
	RequestId *string                       `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Items     *DescribeSchemasResponseItems `json:"Items,omitempty" xml:"Items,omitempty" require:"true" type:"Struct"`
}

func (s DescribeSchemasResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeSchemasResponse) GoString() string {
	return s.String()
}

func (s *DescribeSchemasResponse) SetRequestId(v string) *DescribeSchemasResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeSchemasResponse) SetItems(v *DescribeSchemasResponseItems) *DescribeSchemasResponse {
	s.Items = v
	return s
}

type DescribeSchemasResponseItems struct {
	Schema []*DescribeSchemasResponseItemsSchema `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeSchemasResponseItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeSchemasResponseItems) GoString() string {
	return s.String()
}

func (s *DescribeSchemasResponseItems) SetSchema(v []*DescribeSchemasResponseItemsSchema) *DescribeSchemasResponseItems {
	s.Schema = v
	return s
}

type DescribeSchemasResponseItemsSchema struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
}

func (s DescribeSchemasResponseItemsSchema) String() string {
	return tea.Prettify(s)
}

func (s DescribeSchemasResponseItemsSchema) GoString() string {
	return s.String()
}

func (s *DescribeSchemasResponseItemsSchema) SetDBClusterId(v string) *DescribeSchemasResponseItemsSchema {
	s.DBClusterId = &v
	return s
}

func (s *DescribeSchemasResponseItemsSchema) SetSchemaName(v string) *DescribeSchemasResponseItemsSchema {
	s.SchemaName = &v
	return s
}

type DescribeAllDataSourcesRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty"`
}

func (s DescribeAllDataSourcesRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesRequest) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesRequest) SetDBClusterId(v string) *DescribeAllDataSourcesRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourcesRequest) SetSchemaName(v string) *DescribeAllDataSourcesRequest {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourcesRequest) SetTableName(v string) *DescribeAllDataSourcesRequest {
	s.TableName = &v
	return s
}

type DescribeAllDataSourcesResponse struct {
	RequestId *string                                `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Schemas   *DescribeAllDataSourcesResponseSchemas `json:"Schemas,omitempty" xml:"Schemas,omitempty" require:"true" type:"Struct"`
	Tables    *DescribeAllDataSourcesResponseTables  `json:"Tables,omitempty" xml:"Tables,omitempty" require:"true" type:"Struct"`
	Columns   *DescribeAllDataSourcesResponseColumns `json:"Columns,omitempty" xml:"Columns,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAllDataSourcesResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponse) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponse) SetRequestId(v string) *DescribeAllDataSourcesResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAllDataSourcesResponse) SetSchemas(v *DescribeAllDataSourcesResponseSchemas) *DescribeAllDataSourcesResponse {
	s.Schemas = v
	return s
}

func (s *DescribeAllDataSourcesResponse) SetTables(v *DescribeAllDataSourcesResponseTables) *DescribeAllDataSourcesResponse {
	s.Tables = v
	return s
}

func (s *DescribeAllDataSourcesResponse) SetColumns(v *DescribeAllDataSourcesResponseColumns) *DescribeAllDataSourcesResponse {
	s.Columns = v
	return s
}

type DescribeAllDataSourcesResponseSchemas struct {
	Schema []*DescribeAllDataSourcesResponseSchemasSchema `json:"Schema,omitempty" xml:"Schema,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourcesResponseSchemas) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseSchemas) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseSchemas) SetSchema(v []*DescribeAllDataSourcesResponseSchemasSchema) *DescribeAllDataSourcesResponseSchemas {
	s.Schema = v
	return s
}

type DescribeAllDataSourcesResponseSchemasSchema struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
}

func (s DescribeAllDataSourcesResponseSchemasSchema) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseSchemasSchema) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseSchemasSchema) SetDBClusterId(v string) *DescribeAllDataSourcesResponseSchemasSchema {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourcesResponseSchemasSchema) SetSchemaName(v string) *DescribeAllDataSourcesResponseSchemasSchema {
	s.SchemaName = &v
	return s
}

type DescribeAllDataSourcesResponseTables struct {
	Table []*DescribeAllDataSourcesResponseTablesTable `json:"Table,omitempty" xml:"Table,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourcesResponseTables) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseTables) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseTables) SetTable(v []*DescribeAllDataSourcesResponseTablesTable) *DescribeAllDataSourcesResponseTables {
	s.Table = v
	return s
}

type DescribeAllDataSourcesResponseTablesTable struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName  *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName   *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
}

func (s DescribeAllDataSourcesResponseTablesTable) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseTablesTable) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseTablesTable) SetDBClusterId(v string) *DescribeAllDataSourcesResponseTablesTable {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourcesResponseTablesTable) SetSchemaName(v string) *DescribeAllDataSourcesResponseTablesTable {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourcesResponseTablesTable) SetTableName(v string) *DescribeAllDataSourcesResponseTablesTable {
	s.TableName = &v
	return s
}

type DescribeAllDataSourcesResponseColumns struct {
	Column []*DescribeAllDataSourcesResponseColumnsColumn `json:"Column,omitempty" xml:"Column,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAllDataSourcesResponseColumns) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseColumns) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseColumns) SetColumn(v []*DescribeAllDataSourcesResponseColumnsColumn) *DescribeAllDataSourcesResponseColumns {
	s.Column = v
	return s
}

type DescribeAllDataSourcesResponseColumnsColumn struct {
	DBClusterId         *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SchemaName          *string `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName           *string `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	ColumnName          *string `json:"ColumnName,omitempty" xml:"ColumnName,omitempty" require:"true"`
	Type                *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
	PrimaryKey          *bool   `json:"PrimaryKey,omitempty" xml:"PrimaryKey,omitempty" require:"true"`
	AutoIncrementColumn *bool   `json:"AutoIncrementColumn,omitempty" xml:"AutoIncrementColumn,omitempty" require:"true"`
}

func (s DescribeAllDataSourcesResponseColumnsColumn) String() string {
	return tea.Prettify(s)
}

func (s DescribeAllDataSourcesResponseColumnsColumn) GoString() string {
	return s.String()
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetDBClusterId(v string) *DescribeAllDataSourcesResponseColumnsColumn {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetSchemaName(v string) *DescribeAllDataSourcesResponseColumnsColumn {
	s.SchemaName = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetTableName(v string) *DescribeAllDataSourcesResponseColumnsColumn {
	s.TableName = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetColumnName(v string) *DescribeAllDataSourcesResponseColumnsColumn {
	s.ColumnName = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetType(v string) *DescribeAllDataSourcesResponseColumnsColumn {
	s.Type = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetPrimaryKey(v bool) *DescribeAllDataSourcesResponseColumnsColumn {
	s.PrimaryKey = &v
	return s
}

func (s *DescribeAllDataSourcesResponseColumnsColumn) SetAutoIncrementColumn(v bool) *DescribeAllDataSourcesResponseColumnsColumn {
	s.AutoIncrementColumn = &v
	return s
}

type DescribeLoghubDetailRequest struct {
	RegionId    *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProjectName *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty"`
	ExportName  *string `json:"ExportName,omitempty" xml:"ExportName,omitempty"`
}

func (s DescribeLoghubDetailRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLoghubDetailRequest) GoString() string {
	return s.String()
}

func (s *DescribeLoghubDetailRequest) SetRegionId(v string) *DescribeLoghubDetailRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeLoghubDetailRequest) SetProjectName(v string) *DescribeLoghubDetailRequest {
	s.ProjectName = &v
	return s
}

func (s *DescribeLoghubDetailRequest) SetExportName(v string) *DescribeLoghubDetailRequest {
	s.ExportName = &v
	return s
}

type DescribeLoghubDetailResponse struct {
	RequestId  *string                                 `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	LoghubInfo *DescribeLoghubDetailResponseLoghubInfo `json:"LoghubInfo,omitempty" xml:"LoghubInfo,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLoghubDetailResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLoghubDetailResponse) GoString() string {
	return s.String()
}

func (s *DescribeLoghubDetailResponse) SetRequestId(v string) *DescribeLoghubDetailResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLoghubDetailResponse) SetLoghubInfo(v *DescribeLoghubDetailResponseLoghubInfo) *DescribeLoghubDetailResponse {
	s.LoghubInfo = v
	return s
}

type DescribeLoghubDetailResponseLoghubInfo struct {
	ProjectName     *string                                             `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	LogStoreName    *string                                             `json:"LogStoreName,omitempty" xml:"LogStoreName,omitempty" require:"true"`
	DeliverName     *string                                             `json:"DeliverName,omitempty" xml:"DeliverName,omitempty" require:"true"`
	DeliverTime     *string                                             `json:"DeliverTime,omitempty" xml:"DeliverTime,omitempty" require:"true"`
	DomainUrl       *string                                             `json:"DomainUrl,omitempty" xml:"DomainUrl,omitempty" require:"true"`
	Description     *string                                             `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	SchemaName      *string                                             `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName       *string                                             `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	RegionId        *string                                             `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId          *string                                             `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	UserName        *string                                             `json:"UserName,omitempty" xml:"UserName,omitempty" require:"true"`
	Password        *string                                             `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
	FilterDirtyData *bool                                               `json:"FilterDirtyData,omitempty" xml:"FilterDirtyData,omitempty" require:"true"`
	AccessKey       *string                                             `json:"AccessKey,omitempty" xml:"AccessKey,omitempty" require:"true"`
	AccessSecret    *string                                             `json:"AccessSecret,omitempty" xml:"AccessSecret,omitempty" require:"true"`
	DBType          *string                                             `json:"DBType,omitempty" xml:"DBType,omitempty" require:"true"`
	DBClusterId     *string                                             `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	LogHubStores    *DescribeLoghubDetailResponseLoghubInfoLogHubStores `json:"LogHubStores,omitempty" xml:"LogHubStores,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLoghubDetailResponseLoghubInfo) String() string {
	return tea.Prettify(s)
}

func (s DescribeLoghubDetailResponseLoghubInfo) GoString() string {
	return s.String()
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetProjectName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.ProjectName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetLogStoreName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.LogStoreName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDeliverName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.DeliverName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDeliverTime(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.DeliverTime = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDomainUrl(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.DomainUrl = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDescription(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.Description = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetSchemaName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.SchemaName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetTableName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.TableName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetRegionId(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.RegionId = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetZoneId(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.ZoneId = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetUserName(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.UserName = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetPassword(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.Password = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetFilterDirtyData(v bool) *DescribeLoghubDetailResponseLoghubInfo {
	s.FilterDirtyData = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetAccessKey(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.AccessKey = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetAccessSecret(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.AccessSecret = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDBType(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.DBType = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetDBClusterId(v string) *DescribeLoghubDetailResponseLoghubInfo {
	s.DBClusterId = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfo) SetLogHubStores(v *DescribeLoghubDetailResponseLoghubInfoLogHubStores) *DescribeLoghubDetailResponseLoghubInfo {
	s.LogHubStores = v
	return s
}

type DescribeLoghubDetailResponseLoghubInfoLogHubStores struct {
	LogHubStore []*DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore `json:"LogHubStore,omitempty" xml:"LogHubStore,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeLoghubDetailResponseLoghubInfoLogHubStores) String() string {
	return tea.Prettify(s)
}

func (s DescribeLoghubDetailResponseLoghubInfoLogHubStores) GoString() string {
	return s.String()
}

func (s *DescribeLoghubDetailResponseLoghubInfoLogHubStores) SetLogHubStore(v []*DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) *DescribeLoghubDetailResponseLoghubInfoLogHubStores {
	s.LogHubStore = v
	return s
}

type DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore struct {
	LogKey   *string `json:"LogKey,omitempty" xml:"LogKey,omitempty" require:"true"`
	FieldKey *string `json:"FieldKey,omitempty" xml:"FieldKey,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) String() string {
	return tea.Prettify(s)
}

func (s DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) GoString() string {
	return s.String()
}

func (s *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) SetLogKey(v string) *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore {
	s.LogKey = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) SetFieldKey(v string) *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore {
	s.FieldKey = &v
	return s
}

func (s *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore) SetType(v string) *DescribeLoghubDetailResponseLoghubInfoLogHubStoresLogHubStore {
	s.Type = &v
	return s
}

type OperateLogHubRequest struct {
	Create       *bool                               `json:"Create,omitempty" xml:"Create,omitempty" require:"true"`
	DBClusterId  *string                             `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	ProjectName  *string                             `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	LogStoreName *string                             `json:"LogStoreName,omitempty" xml:"LogStoreName,omitempty" require:"true"`
	DeliverName  *string                             `json:"DeliverName,omitempty" xml:"DeliverName,omitempty" require:"true"`
	DeliverTime  *string                             `json:"DeliverTime,omitempty" xml:"DeliverTime,omitempty" require:"true"`
	Description  *string                             `json:"Description,omitempty" xml:"Description,omitempty" require:"true"`
	DomainUrl    *string                             `json:"DomainUrl,omitempty" xml:"DomainUrl,omitempty" require:"true"`
	SchemaName   *string                             `json:"SchemaName,omitempty" xml:"SchemaName,omitempty" require:"true"`
	TableName    *string                             `json:"TableName,omitempty" xml:"TableName,omitempty" require:"true"`
	UserName     *string                             `json:"UserName,omitempty" xml:"UserName,omitempty" require:"true"`
	Password     *string                             `json:"Password,omitempty" xml:"Password,omitempty" require:"true"`
	FilterDirty  *bool                               `json:"FilterDirty,omitempty" xml:"FilterDirty,omitempty"`
	LogHubStores []*OperateLogHubRequestLogHubStores `json:"LogHubStores,omitempty" xml:"LogHubStores,omitempty" require:"true" type:"Repeated"`
	AccessKey    *string                             `json:"AccessKey,omitempty" xml:"AccessKey,omitempty"`
	AccessSecret *string                             `json:"AccessSecret,omitempty" xml:"AccessSecret,omitempty"`
}

func (s OperateLogHubRequest) String() string {
	return tea.Prettify(s)
}

func (s OperateLogHubRequest) GoString() string {
	return s.String()
}

func (s *OperateLogHubRequest) SetCreate(v bool) *OperateLogHubRequest {
	s.Create = &v
	return s
}

func (s *OperateLogHubRequest) SetDBClusterId(v string) *OperateLogHubRequest {
	s.DBClusterId = &v
	return s
}

func (s *OperateLogHubRequest) SetProjectName(v string) *OperateLogHubRequest {
	s.ProjectName = &v
	return s
}

func (s *OperateLogHubRequest) SetLogStoreName(v string) *OperateLogHubRequest {
	s.LogStoreName = &v
	return s
}

func (s *OperateLogHubRequest) SetDeliverName(v string) *OperateLogHubRequest {
	s.DeliverName = &v
	return s
}

func (s *OperateLogHubRequest) SetDeliverTime(v string) *OperateLogHubRequest {
	s.DeliverTime = &v
	return s
}

func (s *OperateLogHubRequest) SetDescription(v string) *OperateLogHubRequest {
	s.Description = &v
	return s
}

func (s *OperateLogHubRequest) SetDomainUrl(v string) *OperateLogHubRequest {
	s.DomainUrl = &v
	return s
}

func (s *OperateLogHubRequest) SetSchemaName(v string) *OperateLogHubRequest {
	s.SchemaName = &v
	return s
}

func (s *OperateLogHubRequest) SetTableName(v string) *OperateLogHubRequest {
	s.TableName = &v
	return s
}

func (s *OperateLogHubRequest) SetUserName(v string) *OperateLogHubRequest {
	s.UserName = &v
	return s
}

func (s *OperateLogHubRequest) SetPassword(v string) *OperateLogHubRequest {
	s.Password = &v
	return s
}

func (s *OperateLogHubRequest) SetFilterDirty(v bool) *OperateLogHubRequest {
	s.FilterDirty = &v
	return s
}

func (s *OperateLogHubRequest) SetLogHubStores(v []*OperateLogHubRequestLogHubStores) *OperateLogHubRequest {
	s.LogHubStores = v
	return s
}

func (s *OperateLogHubRequest) SetAccessKey(v string) *OperateLogHubRequest {
	s.AccessKey = &v
	return s
}

func (s *OperateLogHubRequest) SetAccessSecret(v string) *OperateLogHubRequest {
	s.AccessSecret = &v
	return s
}

type OperateLogHubRequestLogHubStores struct {
	LogKey   *string `json:"LogKey,omitempty" xml:"LogKey,omitempty" require:"true"`
	FieldKey *string `json:"FieldKey,omitempty" xml:"FieldKey,omitempty" require:"true"`
	Type     *string `json:"Type,omitempty" xml:"Type,omitempty" require:"true"`
}

func (s OperateLogHubRequestLogHubStores) String() string {
	return tea.Prettify(s)
}

func (s OperateLogHubRequestLogHubStores) GoString() string {
	return s.String()
}

func (s *OperateLogHubRequestLogHubStores) SetLogKey(v string) *OperateLogHubRequestLogHubStores {
	s.LogKey = &v
	return s
}

func (s *OperateLogHubRequestLogHubStores) SetFieldKey(v string) *OperateLogHubRequestLogHubStores {
	s.FieldKey = &v
	return s
}

func (s *OperateLogHubRequestLogHubStores) SetType(v string) *OperateLogHubRequestLogHubStores {
	s.Type = &v
	return s
}

type OperateLogHubResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s OperateLogHubResponse) String() string {
	return tea.Prettify(s)
}

func (s OperateLogHubResponse) GoString() string {
	return s.String()
}

func (s *OperateLogHubResponse) SetRequestId(v string) *OperateLogHubResponse {
	s.RequestId = &v
	return s
}

type DescribeLogStoreKeysRequest struct {
	RegionId     *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ProjectName  *string `json:"ProjectName,omitempty" xml:"ProjectName,omitempty" require:"true"`
	LogStoreName *string `json:"LogStoreName,omitempty" xml:"LogStoreName,omitempty" require:"true"`
}

func (s DescribeLogStoreKeysRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogStoreKeysRequest) GoString() string {
	return s.String()
}

func (s *DescribeLogStoreKeysRequest) SetRegionId(v string) *DescribeLogStoreKeysRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeLogStoreKeysRequest) SetProjectName(v string) *DescribeLogStoreKeysRequest {
	s.ProjectName = &v
	return s
}

func (s *DescribeLogStoreKeysRequest) SetLogStoreName(v string) *DescribeLogStoreKeysRequest {
	s.LogStoreName = &v
	return s
}

type DescribeLogStoreKeysResponse struct {
	RequestId    *string                                   `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	LogStoreKeys *DescribeLogStoreKeysResponseLogStoreKeys `json:"LogStoreKeys,omitempty" xml:"LogStoreKeys,omitempty" require:"true" type:"Struct"`
}

func (s DescribeLogStoreKeysResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogStoreKeysResponse) GoString() string {
	return s.String()
}

func (s *DescribeLogStoreKeysResponse) SetRequestId(v string) *DescribeLogStoreKeysResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeLogStoreKeysResponse) SetLogStoreKeys(v *DescribeLogStoreKeysResponseLogStoreKeys) *DescribeLogStoreKeysResponse {
	s.LogStoreKeys = v
	return s
}

type DescribeLogStoreKeysResponseLogStoreKeys struct {
	LogStoreKey []*string `json:"LogStoreKey,omitempty" xml:"LogStoreKey,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeLogStoreKeysResponseLogStoreKeys) String() string {
	return tea.Prettify(s)
}

func (s DescribeLogStoreKeysResponseLogStoreKeys) GoString() string {
	return s.String()
}

func (s *DescribeLogStoreKeysResponseLogStoreKeys) SetLogStoreKey(v []*string) *DescribeLogStoreKeysResponseLogStoreKeys {
	s.LogStoreKey = v
	return s
}

type CreateDBInstanceRequest struct {
	RegionId             *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId               *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	DBClusterVersion     *string `json:"DBClusterVersion,omitempty" xml:"DBClusterVersion,omitempty" require:"true"`
	DBClusterCategory    *string `json:"DBClusterCategory,omitempty" xml:"DBClusterCategory,omitempty" require:"true"`
	DBClusterClass       *string `json:"DBClusterClass,omitempty" xml:"DBClusterClass,omitempty" require:"true"`
	DBNodeGroupCount     *string `json:"DBNodeGroupCount,omitempty" xml:"DBNodeGroupCount,omitempty" require:"true"`
	DBNodeStorage        *string `json:"DBNodeStorage,omitempty" xml:"DBNodeStorage,omitempty" require:"true"`
	DBClusterNetworkType *string `json:"DBClusterNetworkType,omitempty" xml:"DBClusterNetworkType,omitempty" require:"true"`
	DBClusterDescription *string `json:"DBClusterDescription,omitempty" xml:"DBClusterDescription,omitempty"`
	PayType              *string `json:"PayType,omitempty" xml:"PayType,omitempty" require:"true"`
	Period               *string `json:"Period,omitempty" xml:"Period,omitempty"`
	UsedTime             *string `json:"UsedTime,omitempty" xml:"UsedTime,omitempty"`
	VPCId                *string `json:"VPCId,omitempty" xml:"VPCId,omitempty"`
	VSwitchId            *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty"`
	ClientToken          *string `json:"ClientToken,omitempty" xml:"ClientToken,omitempty"`
	DbNodeStorageType    *string `json:"DbNodeStorageType,omitempty" xml:"DbNodeStorageType,omitempty" require:"true"`
}

func (s CreateDBInstanceRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateDBInstanceRequest) GoString() string {
	return s.String()
}

func (s *CreateDBInstanceRequest) SetRegionId(v string) *CreateDBInstanceRequest {
	s.RegionId = &v
	return s
}

func (s *CreateDBInstanceRequest) SetZoneId(v string) *CreateDBInstanceRequest {
	s.ZoneId = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBClusterVersion(v string) *CreateDBInstanceRequest {
	s.DBClusterVersion = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBClusterCategory(v string) *CreateDBInstanceRequest {
	s.DBClusterCategory = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBClusterClass(v string) *CreateDBInstanceRequest {
	s.DBClusterClass = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBNodeGroupCount(v string) *CreateDBInstanceRequest {
	s.DBNodeGroupCount = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBNodeStorage(v string) *CreateDBInstanceRequest {
	s.DBNodeStorage = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBClusterNetworkType(v string) *CreateDBInstanceRequest {
	s.DBClusterNetworkType = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDBClusterDescription(v string) *CreateDBInstanceRequest {
	s.DBClusterDescription = &v
	return s
}

func (s *CreateDBInstanceRequest) SetPayType(v string) *CreateDBInstanceRequest {
	s.PayType = &v
	return s
}

func (s *CreateDBInstanceRequest) SetPeriod(v string) *CreateDBInstanceRequest {
	s.Period = &v
	return s
}

func (s *CreateDBInstanceRequest) SetUsedTime(v string) *CreateDBInstanceRequest {
	s.UsedTime = &v
	return s
}

func (s *CreateDBInstanceRequest) SetVPCId(v string) *CreateDBInstanceRequest {
	s.VPCId = &v
	return s
}

func (s *CreateDBInstanceRequest) SetVSwitchId(v string) *CreateDBInstanceRequest {
	s.VSwitchId = &v
	return s
}

func (s *CreateDBInstanceRequest) SetClientToken(v string) *CreateDBInstanceRequest {
	s.ClientToken = &v
	return s
}

func (s *CreateDBInstanceRequest) SetDbNodeStorageType(v string) *CreateDBInstanceRequest {
	s.DbNodeStorageType = &v
	return s
}

type CreateDBInstanceResponse struct {
	RequestId   *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	OrderId     *string `json:"OrderId,omitempty" xml:"OrderId,omitempty" require:"true"`
}

func (s CreateDBInstanceResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateDBInstanceResponse) GoString() string {
	return s.String()
}

func (s *CreateDBInstanceResponse) SetRequestId(v string) *CreateDBInstanceResponse {
	s.RequestId = &v
	return s
}

func (s *CreateDBInstanceResponse) SetDBClusterId(v string) *CreateDBInstanceResponse {
	s.DBClusterId = &v
	return s
}

func (s *CreateDBInstanceResponse) SetOrderId(v string) *CreateDBInstanceResponse {
	s.OrderId = &v
	return s
}

type DescribeAvailableResourceRequest struct {
	RegionId       *string `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId         *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty"`
	ChargeType     *string `json:"ChargeType,omitempty" xml:"ChargeType,omitempty"`
	AcceptLanguage *string `json:"AcceptLanguage,omitempty" xml:"AcceptLanguage,omitempty"`
}

func (s DescribeAvailableResourceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceRequest) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceRequest) SetRegionId(v string) *DescribeAvailableResourceRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeAvailableResourceRequest) SetZoneId(v string) *DescribeAvailableResourceRequest {
	s.ZoneId = &v
	return s
}

func (s *DescribeAvailableResourceRequest) SetChargeType(v string) *DescribeAvailableResourceRequest {
	s.ChargeType = &v
	return s
}

func (s *DescribeAvailableResourceRequest) SetAcceptLanguage(v string) *DescribeAvailableResourceRequest {
	s.AcceptLanguage = &v
	return s
}

type DescribeAvailableResourceResponse struct {
	RequestId         *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	RegionId          *string                                             `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	AvailableZoneList *DescribeAvailableResourceResponseAvailableZoneList `json:"AvailableZoneList,omitempty" xml:"AvailableZoneList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponse) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponse) SetRequestId(v string) *DescribeAvailableResourceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAvailableResourceResponse) SetRegionId(v string) *DescribeAvailableResourceResponse {
	s.RegionId = &v
	return s
}

func (s *DescribeAvailableResourceResponse) SetAvailableZoneList(v *DescribeAvailableResourceResponseAvailableZoneList) *DescribeAvailableResourceResponse {
	s.AvailableZoneList = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneList struct {
	AvailableZone []*DescribeAvailableResourceResponseAvailableZoneListAvailableZone `json:"AvailableZone,omitempty" xml:"AvailableZone,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneList) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneList) SetAvailableZone(v []*DescribeAvailableResourceResponseAvailableZoneListAvailableZone) *DescribeAvailableResourceResponseAvailableZoneList {
	s.AvailableZone = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZone struct {
	ZoneId              *string                                                                             `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	SupportedSerialList *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList `json:"SupportedSerialList,omitempty" xml:"SupportedSerialList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZone) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZone) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZone) SetZoneId(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZone {
	s.ZoneId = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZone) SetSupportedSerialList(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList) *DescribeAvailableResourceResponseAvailableZoneListAvailableZone {
	s.SupportedSerialList = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList struct {
	SupportedSerial []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial `json:"SupportedSerial,omitempty" xml:"SupportedSerial,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList) SetSupportedSerial(v []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialList {
	s.SupportedSerial = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial struct {
	Serial                     *string                                                                                                                      `json:"Serial,omitempty" xml:"Serial,omitempty" require:"true"`
	SupportedInstanceClassList *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList `json:"SupportedInstanceClassList,omitempty" xml:"SupportedInstanceClassList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial) SetSerial(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial {
	s.Serial = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial) SetSupportedInstanceClassList(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerial {
	s.SupportedInstanceClassList = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList struct {
	SupportedInstanceClass []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass `json:"SupportedInstanceClass,omitempty" xml:"SupportedInstanceClass,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList) SetSupportedInstanceClass(v []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassList {
	s.SupportedInstanceClass = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass struct {
	InstanceClass          *string                                                                                                                                                                  `json:"InstanceClass,omitempty" xml:"InstanceClass,omitempty" require:"true"`
	Tips                   *string                                                                                                                                                                  `json:"Tips,omitempty" xml:"Tips,omitempty" require:"true"`
	SupportedNodeCountList *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList `json:"SupportedNodeCountList,omitempty" xml:"SupportedNodeCountList,omitempty" require:"true" type:"Struct"`
	SupportedExecutorList  *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList  `json:"SupportedExecutorList,omitempty" xml:"SupportedExecutorList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) SetInstanceClass(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass {
	s.InstanceClass = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) SetTips(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass {
	s.Tips = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) SetSupportedNodeCountList(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass {
	s.SupportedNodeCountList = v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass) SetSupportedExecutorList(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClass {
	s.SupportedExecutorList = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList struct {
	SupportedNodeCount []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount `json:"SupportedNodeCount,omitempty" xml:"SupportedNodeCount,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList) SetSupportedNodeCount(v []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountList {
	s.SupportedNodeCount = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount struct {
	NodeCount   *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount   `json:"NodeCount,omitempty" xml:"NodeCount,omitempty" require:"true" type:"Struct"`
	StorageSize *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize `json:"StorageSize,omitempty" xml:"StorageSize,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount) SetNodeCount(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount {
	s.NodeCount = v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount) SetStorageSize(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCount {
	s.StorageSize = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount struct {
	MinCount *string `json:"MinCount,omitempty" xml:"MinCount,omitempty" require:"true"`
	MaxCount *string `json:"MaxCount,omitempty" xml:"MaxCount,omitempty" require:"true"`
	Step     *string `json:"Step,omitempty" xml:"Step,omitempty" require:"true"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) SetMinCount(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount {
	s.MinCount = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) SetMaxCount(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount {
	s.MaxCount = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount) SetStep(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountNodeCount {
	s.Step = &v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize struct {
	StorageSize []*string `json:"StorageSize,omitempty" xml:"StorageSize,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize) SetStorageSize(v []*string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedNodeCountListSupportedNodeCountStorageSize {
	s.StorageSize = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList struct {
	SupportedExecutor []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor `json:"SupportedExecutor,omitempty" xml:"SupportedExecutor,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList) SetSupportedExecutor(v []*DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorList {
	s.SupportedExecutor = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor struct {
	NodeCount *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount `json:"NodeCount,omitempty" xml:"NodeCount,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor) SetNodeCount(v *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutor {
	s.NodeCount = v
	return s
}

type DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount struct {
	MinCount *string `json:"MinCount,omitempty" xml:"MinCount,omitempty" require:"true"`
	MaxCount *string `json:"MaxCount,omitempty" xml:"MaxCount,omitempty" require:"true"`
	Step     *string `json:"Step,omitempty" xml:"Step,omitempty" require:"true"`
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) String() string {
	return tea.Prettify(s)
}

func (s DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) GoString() string {
	return s.String()
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) SetMinCount(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount {
	s.MinCount = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) SetMaxCount(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount {
	s.MaxCount = &v
	return s
}

func (s *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount) SetStep(v string) *DescribeAvailableResourceResponseAvailableZoneListAvailableZoneSupportedSerialListSupportedSerialSupportedInstanceClassListSupportedInstanceClassSupportedExecutorListSupportedExecutorNodeCount {
	s.Step = &v
	return s
}

type DescribeDBClusterPerformanceRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	Key         *string `json:"Key,omitempty" xml:"Key,omitempty"`
	StartTime   *string `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	EndTime     *string `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
}

func (s DescribeDBClusterPerformanceRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterPerformanceRequest) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterPerformanceRequest) SetDBClusterId(v string) *DescribeDBClusterPerformanceRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeDBClusterPerformanceRequest) SetKey(v string) *DescribeDBClusterPerformanceRequest {
	s.Key = &v
	return s
}

func (s *DescribeDBClusterPerformanceRequest) SetStartTime(v string) *DescribeDBClusterPerformanceRequest {
	s.StartTime = &v
	return s
}

func (s *DescribeDBClusterPerformanceRequest) SetEndTime(v string) *DescribeDBClusterPerformanceRequest {
	s.EndTime = &v
	return s
}

type DescribeDBClusterPerformanceResponse struct {
	DBClusterId  *string                                             `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	EndTime      *string                                             `json:"EndTime,omitempty" xml:"EndTime,omitempty" require:"true"`
	RequestId    *string                                             `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	StartTime    *string                                             `json:"StartTime,omitempty" xml:"StartTime,omitempty" require:"true"`
	Performances []*DescribeDBClusterPerformanceResponsePerformances `json:"Performances,omitempty" xml:"Performances,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterPerformanceResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterPerformanceResponse) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterPerformanceResponse) SetDBClusterId(v string) *DescribeDBClusterPerformanceResponse {
	s.DBClusterId = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponse) SetEndTime(v string) *DescribeDBClusterPerformanceResponse {
	s.EndTime = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponse) SetRequestId(v string) *DescribeDBClusterPerformanceResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponse) SetStartTime(v string) *DescribeDBClusterPerformanceResponse {
	s.StartTime = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponse) SetPerformances(v []*DescribeDBClusterPerformanceResponsePerformances) *DescribeDBClusterPerformanceResponse {
	s.Performances = v
	return s
}

type DescribeDBClusterPerformanceResponsePerformances struct {
	Key    *string                                                   `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Unit   *string                                                   `json:"Unit,omitempty" xml:"Unit,omitempty" require:"true"`
	Name   *string                                                   `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Series []*DescribeDBClusterPerformanceResponsePerformancesSeries `json:"Series,omitempty" xml:"Series,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterPerformanceResponsePerformances) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterPerformanceResponsePerformances) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterPerformanceResponsePerformances) SetKey(v string) *DescribeDBClusterPerformanceResponsePerformances {
	s.Key = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponsePerformances) SetUnit(v string) *DescribeDBClusterPerformanceResponsePerformances {
	s.Unit = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponsePerformances) SetName(v string) *DescribeDBClusterPerformanceResponsePerformances {
	s.Name = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponsePerformances) SetSeries(v []*DescribeDBClusterPerformanceResponsePerformancesSeries) *DescribeDBClusterPerformanceResponsePerformances {
	s.Series = v
	return s
}

type DescribeDBClusterPerformanceResponsePerformancesSeries struct {
	Name   *string                                                         `json:"Name,omitempty" xml:"Name,omitempty" require:"true"`
	Values []*DescribeDBClusterPerformanceResponsePerformancesSeriesValues `json:"Values,omitempty" xml:"Values,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterPerformanceResponsePerformancesSeries) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterPerformanceResponsePerformancesSeries) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterPerformanceResponsePerformancesSeries) SetName(v string) *DescribeDBClusterPerformanceResponsePerformancesSeries {
	s.Name = &v
	return s
}

func (s *DescribeDBClusterPerformanceResponsePerformancesSeries) SetValues(v []*DescribeDBClusterPerformanceResponsePerformancesSeriesValues) *DescribeDBClusterPerformanceResponsePerformancesSeries {
	s.Values = v
	return s
}

type DescribeDBClusterPerformanceResponsePerformancesSeriesValues struct {
	Point []*string `json:"Point,omitempty" xml:"Point,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterPerformanceResponsePerformancesSeriesValues) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterPerformanceResponsePerformancesSeriesValues) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterPerformanceResponsePerformancesSeriesValues) SetPoint(v []*string) *DescribeDBClusterPerformanceResponsePerformancesSeriesValues {
	s.Point = v
	return s
}

type AllocateClusterPublicConnectionRequest struct {
	DBClusterId            *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	ConnectionStringPrefix *string `json:"ConnectionStringPrefix,omitempty" xml:"ConnectionStringPrefix,omitempty"`
}

func (s AllocateClusterPublicConnectionRequest) String() string {
	return tea.Prettify(s)
}

func (s AllocateClusterPublicConnectionRequest) GoString() string {
	return s.String()
}

func (s *AllocateClusterPublicConnectionRequest) SetDBClusterId(v string) *AllocateClusterPublicConnectionRequest {
	s.DBClusterId = &v
	return s
}

func (s *AllocateClusterPublicConnectionRequest) SetConnectionStringPrefix(v string) *AllocateClusterPublicConnectionRequest {
	s.ConnectionStringPrefix = &v
	return s
}

type AllocateClusterPublicConnectionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s AllocateClusterPublicConnectionResponse) String() string {
	return tea.Prettify(s)
}

func (s AllocateClusterPublicConnectionResponse) GoString() string {
	return s.String()
}

func (s *AllocateClusterPublicConnectionResponse) SetRequestId(v string) *AllocateClusterPublicConnectionResponse {
	s.RequestId = &v
	return s
}

type ReleaseClusterPublicConnectionRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
}

func (s ReleaseClusterPublicConnectionRequest) String() string {
	return tea.Prettify(s)
}

func (s ReleaseClusterPublicConnectionRequest) GoString() string {
	return s.String()
}

func (s *ReleaseClusterPublicConnectionRequest) SetDBClusterId(v string) *ReleaseClusterPublicConnectionRequest {
	s.DBClusterId = &v
	return s
}

type ReleaseClusterPublicConnectionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ReleaseClusterPublicConnectionResponse) String() string {
	return tea.Prettify(s)
}

func (s ReleaseClusterPublicConnectionResponse) GoString() string {
	return s.String()
}

func (s *ReleaseClusterPublicConnectionResponse) SetRequestId(v string) *ReleaseClusterPublicConnectionResponse {
	s.RequestId = &v
	return s
}

type DeleteAccountRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	AccountName *string `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
}

func (s DeleteAccountRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccountRequest) GoString() string {
	return s.String()
}

func (s *DeleteAccountRequest) SetDBClusterId(v string) *DeleteAccountRequest {
	s.DBClusterId = &v
	return s
}

func (s *DeleteAccountRequest) SetAccountName(v string) *DeleteAccountRequest {
	s.AccountName = &v
	return s
}

type DeleteAccountResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteAccountResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteAccountResponse) GoString() string {
	return s.String()
}

func (s *DeleteAccountResponse) SetRequestId(v string) *DeleteAccountResponse {
	s.RequestId = &v
	return s
}

type CreateAccountRequest struct {
	DBClusterId        *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	AccountName        *string `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	AccountPassword    *string `json:"AccountPassword,omitempty" xml:"AccountPassword,omitempty" require:"true"`
	AccountDescription *string `json:"AccountDescription,omitempty" xml:"AccountDescription,omitempty"`
}

func (s CreateAccountRequest) String() string {
	return tea.Prettify(s)
}

func (s CreateAccountRequest) GoString() string {
	return s.String()
}

func (s *CreateAccountRequest) SetDBClusterId(v string) *CreateAccountRequest {
	s.DBClusterId = &v
	return s
}

func (s *CreateAccountRequest) SetAccountName(v string) *CreateAccountRequest {
	s.AccountName = &v
	return s
}

func (s *CreateAccountRequest) SetAccountPassword(v string) *CreateAccountRequest {
	s.AccountPassword = &v
	return s
}

func (s *CreateAccountRequest) SetAccountDescription(v string) *CreateAccountRequest {
	s.AccountDescription = &v
	return s
}

type CreateAccountResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s CreateAccountResponse) String() string {
	return tea.Prettify(s)
}

func (s CreateAccountResponse) GoString() string {
	return s.String()
}

func (s *CreateAccountResponse) SetRequestId(v string) *CreateAccountResponse {
	s.RequestId = &v
	return s
}

type DescribeAccountsRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	AccountName *string `json:"AccountName,omitempty" xml:"AccountName,omitempty"`
	PageSize    *int    `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber  *int    `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
}

func (s DescribeAccountsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccountsRequest) GoString() string {
	return s.String()
}

func (s *DescribeAccountsRequest) SetDBClusterId(v string) *DescribeAccountsRequest {
	s.DBClusterId = &v
	return s
}

func (s *DescribeAccountsRequest) SetAccountName(v string) *DescribeAccountsRequest {
	s.AccountName = &v
	return s
}

func (s *DescribeAccountsRequest) SetPageSize(v int) *DescribeAccountsRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeAccountsRequest) SetPageNumber(v int) *DescribeAccountsRequest {
	s.PageNumber = &v
	return s
}

type DescribeAccountsResponse struct {
	RequestId  *string                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber *int                              `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	TotalCount *int                              `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                              `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	Accounts   *DescribeAccountsResponseAccounts `json:"Accounts,omitempty" xml:"Accounts,omitempty" require:"true" type:"Struct"`
}

func (s DescribeAccountsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccountsResponse) GoString() string {
	return s.String()
}

func (s *DescribeAccountsResponse) SetRequestId(v string) *DescribeAccountsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeAccountsResponse) SetPageNumber(v int) *DescribeAccountsResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeAccountsResponse) SetTotalCount(v int) *DescribeAccountsResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeAccountsResponse) SetPageSize(v int) *DescribeAccountsResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeAccountsResponse) SetAccounts(v *DescribeAccountsResponseAccounts) *DescribeAccountsResponse {
	s.Accounts = v
	return s
}

type DescribeAccountsResponseAccounts struct {
	Account []*DescribeAccountsResponseAccountsAccount `json:"Account,omitempty" xml:"Account,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeAccountsResponseAccounts) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccountsResponseAccounts) GoString() string {
	return s.String()
}

func (s *DescribeAccountsResponseAccounts) SetAccount(v []*DescribeAccountsResponseAccountsAccount) *DescribeAccountsResponseAccounts {
	s.Account = v
	return s
}

type DescribeAccountsResponseAccountsAccount struct {
	AccountName        *string `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	AccountStatus      *string `json:"AccountStatus,omitempty" xml:"AccountStatus,omitempty" require:"true"`
	AccountDescription *string `json:"AccountDescription,omitempty" xml:"AccountDescription,omitempty" require:"true"`
	AccountType        *string `json:"AccountType,omitempty" xml:"AccountType,omitempty" require:"true"`
}

func (s DescribeAccountsResponseAccountsAccount) String() string {
	return tea.Prettify(s)
}

func (s DescribeAccountsResponseAccountsAccount) GoString() string {
	return s.String()
}

func (s *DescribeAccountsResponseAccountsAccount) SetAccountName(v string) *DescribeAccountsResponseAccountsAccount {
	s.AccountName = &v
	return s
}

func (s *DescribeAccountsResponseAccountsAccount) SetAccountStatus(v string) *DescribeAccountsResponseAccountsAccount {
	s.AccountStatus = &v
	return s
}

func (s *DescribeAccountsResponseAccountsAccount) SetAccountDescription(v string) *DescribeAccountsResponseAccountsAccount {
	s.AccountDescription = &v
	return s
}

func (s *DescribeAccountsResponseAccountsAccount) SetAccountType(v string) *DescribeAccountsResponseAccountsAccount {
	s.AccountType = &v
	return s
}

type ModifyDBClusterAccessWhiteListRequest struct {
	DBClusterId               *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	SecurityIps               *string `json:"SecurityIps,omitempty" xml:"SecurityIps,omitempty" require:"true"`
	DBClusterIPArrayName      *string `json:"DBClusterIPArrayName,omitempty" xml:"DBClusterIPArrayName,omitempty"`
	DBClusterIPArrayAttribute *string `json:"DBClusterIPArrayAttribute,omitempty" xml:"DBClusterIPArrayAttribute,omitempty"`
	ModifyMode                *string `json:"ModifyMode,omitempty" xml:"ModifyMode,omitempty"`
}

func (s ModifyDBClusterAccessWhiteListRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterAccessWhiteListRequest) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterAccessWhiteListRequest) SetDBClusterId(v string) *ModifyDBClusterAccessWhiteListRequest {
	s.DBClusterId = &v
	return s
}

func (s *ModifyDBClusterAccessWhiteListRequest) SetSecurityIps(v string) *ModifyDBClusterAccessWhiteListRequest {
	s.SecurityIps = &v
	return s
}

func (s *ModifyDBClusterAccessWhiteListRequest) SetDBClusterIPArrayName(v string) *ModifyDBClusterAccessWhiteListRequest {
	s.DBClusterIPArrayName = &v
	return s
}

func (s *ModifyDBClusterAccessWhiteListRequest) SetDBClusterIPArrayAttribute(v string) *ModifyDBClusterAccessWhiteListRequest {
	s.DBClusterIPArrayAttribute = &v
	return s
}

func (s *ModifyDBClusterAccessWhiteListRequest) SetModifyMode(v string) *ModifyDBClusterAccessWhiteListRequest {
	s.ModifyMode = &v
	return s
}

type ModifyDBClusterAccessWhiteListResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyDBClusterAccessWhiteListResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterAccessWhiteListResponse) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterAccessWhiteListResponse) SetRequestId(v string) *ModifyDBClusterAccessWhiteListResponse {
	s.RequestId = &v
	return s
}

type DescribeDBClusterAccessWhiteListRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
}

func (s DescribeDBClusterAccessWhiteListRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAccessWhiteListRequest) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAccessWhiteListRequest) SetDBClusterId(v string) *DescribeDBClusterAccessWhiteListRequest {
	s.DBClusterId = &v
	return s
}

type DescribeDBClusterAccessWhiteListResponse struct {
	RequestId                *string                                                           `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DBClusterAccessWhiteList *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList `json:"DBClusterAccessWhiteList,omitempty" xml:"DBClusterAccessWhiteList,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClusterAccessWhiteListResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAccessWhiteListResponse) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAccessWhiteListResponse) SetRequestId(v string) *DescribeDBClusterAccessWhiteListResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDBClusterAccessWhiteListResponse) SetDBClusterAccessWhiteList(v *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList) *DescribeDBClusterAccessWhiteListResponse {
	s.DBClusterAccessWhiteList = v
	return s
}

type DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList struct {
	IPArray []*DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray `json:"IPArray,omitempty" xml:"IPArray,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList) SetIPArray(v []*DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteList {
	s.IPArray = v
	return s
}

type DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray struct {
	DBClusterIPArrayName      *string `json:"DBClusterIPArrayName,omitempty" xml:"DBClusterIPArrayName,omitempty" require:"true"`
	SecurityIPList            *string `json:"SecurityIPList,omitempty" xml:"SecurityIPList,omitempty" require:"true"`
	DBClusterIPArrayAttribute *string `json:"DBClusterIPArrayAttribute,omitempty" xml:"DBClusterIPArrayAttribute,omitempty" require:"true"`
}

func (s DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) SetDBClusterIPArrayName(v string) *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray {
	s.DBClusterIPArrayName = &v
	return s
}

func (s *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) SetSecurityIPList(v string) *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray {
	s.SecurityIPList = &v
	return s
}

func (s *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray) SetDBClusterIPArrayAttribute(v string) *DescribeDBClusterAccessWhiteListResponseDBClusterAccessWhiteListIPArray {
	s.DBClusterIPArrayAttribute = &v
	return s
}

type ModifyDBClusterMaintainTimeRequest struct {
	DBClusterId  *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	MaintainTime *string `json:"MaintainTime,omitempty" xml:"MaintainTime,omitempty" require:"true"`
}

func (s ModifyDBClusterMaintainTimeRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterMaintainTimeRequest) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterMaintainTimeRequest) SetDBClusterId(v string) *ModifyDBClusterMaintainTimeRequest {
	s.DBClusterId = &v
	return s
}

func (s *ModifyDBClusterMaintainTimeRequest) SetMaintainTime(v string) *ModifyDBClusterMaintainTimeRequest {
	s.MaintainTime = &v
	return s
}

type ModifyDBClusterMaintainTimeResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyDBClusterMaintainTimeResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterMaintainTimeResponse) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterMaintainTimeResponse) SetRequestId(v string) *ModifyDBClusterMaintainTimeResponse {
	s.RequestId = &v
	return s
}

type ModifyDBClusterDescriptionRequest struct {
	DBClusterId          *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	DBClusterDescription *string `json:"DBClusterDescription,omitempty" xml:"DBClusterDescription,omitempty" require:"true"`
}

func (s ModifyDBClusterDescriptionRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterDescriptionRequest) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterDescriptionRequest) SetDBClusterId(v string) *ModifyDBClusterDescriptionRequest {
	s.DBClusterId = &v
	return s
}

func (s *ModifyDBClusterDescriptionRequest) SetDBClusterDescription(v string) *ModifyDBClusterDescriptionRequest {
	s.DBClusterDescription = &v
	return s
}

type ModifyDBClusterDescriptionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyDBClusterDescriptionResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyDBClusterDescriptionResponse) GoString() string {
	return s.String()
}

func (s *ModifyDBClusterDescriptionResponse) SetRequestId(v string) *ModifyDBClusterDescriptionResponse {
	s.RequestId = &v
	return s
}

type DeleteDBClusterRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
}

func (s DeleteDBClusterRequest) String() string {
	return tea.Prettify(s)
}

func (s DeleteDBClusterRequest) GoString() string {
	return s.String()
}

func (s *DeleteDBClusterRequest) SetDBClusterId(v string) *DeleteDBClusterRequest {
	s.DBClusterId = &v
	return s
}

type DeleteDBClusterResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s DeleteDBClusterResponse) String() string {
	return tea.Prettify(s)
}

func (s DeleteDBClusterResponse) GoString() string {
	return s.String()
}

func (s *DeleteDBClusterResponse) SetRequestId(v string) *DeleteDBClusterResponse {
	s.RequestId = &v
	return s
}

type ModifyAccountDescriptionRequest struct {
	DBClusterId        *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	AccountName        *string `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	AccountDescription *string `json:"AccountDescription,omitempty" xml:"AccountDescription,omitempty" require:"true"`
}

func (s ModifyAccountDescriptionRequest) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccountDescriptionRequest) GoString() string {
	return s.String()
}

func (s *ModifyAccountDescriptionRequest) SetDBClusterId(v string) *ModifyAccountDescriptionRequest {
	s.DBClusterId = &v
	return s
}

func (s *ModifyAccountDescriptionRequest) SetAccountName(v string) *ModifyAccountDescriptionRequest {
	s.AccountName = &v
	return s
}

func (s *ModifyAccountDescriptionRequest) SetAccountDescription(v string) *ModifyAccountDescriptionRequest {
	s.AccountDescription = &v
	return s
}

type ModifyAccountDescriptionResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ModifyAccountDescriptionResponse) String() string {
	return tea.Prettify(s)
}

func (s ModifyAccountDescriptionResponse) GoString() string {
	return s.String()
}

func (s *ModifyAccountDescriptionResponse) SetRequestId(v string) *ModifyAccountDescriptionResponse {
	s.RequestId = &v
	return s
}

type ResetAccountPasswordRequest struct {
	DBClusterId     *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	AccountName     *string `json:"AccountName,omitempty" xml:"AccountName,omitempty" require:"true"`
	AccountPassword *string `json:"AccountPassword,omitempty" xml:"AccountPassword,omitempty" require:"true"`
}

func (s ResetAccountPasswordRequest) String() string {
	return tea.Prettify(s)
}

func (s ResetAccountPasswordRequest) GoString() string {
	return s.String()
}

func (s *ResetAccountPasswordRequest) SetDBClusterId(v string) *ResetAccountPasswordRequest {
	s.DBClusterId = &v
	return s
}

func (s *ResetAccountPasswordRequest) SetAccountName(v string) *ResetAccountPasswordRequest {
	s.AccountName = &v
	return s
}

func (s *ResetAccountPasswordRequest) SetAccountPassword(v string) *ResetAccountPasswordRequest {
	s.AccountPassword = &v
	return s
}

type ResetAccountPasswordResponse struct {
	RequestId *string `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
}

func (s ResetAccountPasswordResponse) String() string {
	return tea.Prettify(s)
}

func (s ResetAccountPasswordResponse) GoString() string {
	return s.String()
}

func (s *ResetAccountPasswordResponse) SetRequestId(v string) *ResetAccountPasswordResponse {
	s.RequestId = &v
	return s
}

type DescribeDBClusterAttributeRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
}

func (s DescribeDBClusterAttributeRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAttributeRequest) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAttributeRequest) SetDBClusterId(v string) *DescribeDBClusterAttributeRequest {
	s.DBClusterId = &v
	return s
}

type DescribeDBClusterAttributeResponse struct {
	RequestId *string                                      `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	DBCluster *DescribeDBClusterAttributeResponseDBCluster `json:"DBCluster,omitempty" xml:"DBCluster,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClusterAttributeResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAttributeResponse) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAttributeResponse) SetRequestId(v string) *DescribeDBClusterAttributeResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponse) SetDBCluster(v *DescribeDBClusterAttributeResponseDBCluster) *DescribeDBClusterAttributeResponse {
	s.DBCluster = v
	return s
}

type DescribeDBClusterAttributeResponseDBCluster struct {
	RegionId               *string                                          `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId                 *string                                          `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	DBClusterId            *string                                          `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	DBClusterType          *string                                          `json:"DBClusterType,omitempty" xml:"DBClusterType,omitempty" require:"true"`
	DBClusterDescription   *string                                          `json:"DBClusterDescription,omitempty" xml:"DBClusterDescription,omitempty" require:"true"`
	Category               *string                                          `json:"Category,omitempty" xml:"Category,omitempty" require:"true"`
	LockMode               *string                                          `json:"LockMode,omitempty" xml:"LockMode,omitempty" require:"true"`
	LockReason             *string                                          `json:"LockReason,omitempty" xml:"LockReason,omitempty" require:"true"`
	PayType                *string                                          `json:"PayType,omitempty" xml:"PayType,omitempty" require:"true"`
	DBClusterStatus        *string                                          `json:"DBClusterStatus,omitempty" xml:"DBClusterStatus,omitempty" require:"true"`
	DBNodeStorage          *int64                                           `json:"DBNodeStorage,omitempty" xml:"DBNodeStorage,omitempty" require:"true"`
	DBNodeClass            *string                                          `json:"DBNodeClass,omitempty" xml:"DBNodeClass,omitempty" require:"true"`
	DBNodeCount            *int64                                           `json:"DBNodeCount,omitempty" xml:"DBNodeCount,omitempty" require:"true"`
	CreateTime             *string                                          `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	Engine                 *string                                          `json:"Engine,omitempty" xml:"Engine,omitempty" require:"true"`
	EngineVersion          *string                                          `json:"EngineVersion,omitempty" xml:"EngineVersion,omitempty" require:"true"`
	ExpireTime             *string                                          `json:"ExpireTime,omitempty" xml:"ExpireTime,omitempty" require:"true"`
	IsExpired              *string                                          `json:"IsExpired,omitempty" xml:"IsExpired,omitempty" require:"true"`
	MaintainTime           *string                                          `json:"MaintainTime,omitempty" xml:"MaintainTime,omitempty" require:"true"`
	VpcId                  *string                                          `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	VSwitchId              *string                                          `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	VpcCloudInstanceId     *string                                          `json:"VpcCloudInstanceId,omitempty" xml:"VpcCloudInstanceId,omitempty" require:"true"`
	CommodityCode          *string                                          `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty" require:"true"`
	DBClusterNetworkType   *string                                          `json:"DBClusterNetworkType,omitempty" xml:"DBClusterNetworkType,omitempty" require:"true"`
	StorageType            *string                                          `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	PublicConnectionString *string                                          `json:"PublicConnectionString,omitempty" xml:"PublicConnectionString,omitempty" require:"true"`
	PublicPort             *string                                          `json:"PublicPort,omitempty" xml:"PublicPort,omitempty" require:"true"`
	ConnectionString       *string                                          `json:"ConnectionString,omitempty" xml:"ConnectionString,omitempty" require:"true"`
	Port                   *int                                             `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	AliUid                 *string                                          `json:"AliUid,omitempty" xml:"AliUid,omitempty" require:"true"`
	Bid                    *string                                          `json:"Bid,omitempty" xml:"Bid,omitempty" require:"true"`
	Tags                   *DescribeDBClusterAttributeResponseDBClusterTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClusterAttributeResponseDBCluster) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAttributeResponseDBCluster) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetRegionId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.RegionId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetZoneId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.ZoneId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBClusterId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBClusterId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBClusterType(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBClusterType = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBClusterDescription(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBClusterDescription = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetCategory(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.Category = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetLockMode(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.LockMode = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetLockReason(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.LockReason = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetPayType(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.PayType = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBClusterStatus(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBClusterStatus = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBNodeStorage(v int64) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBNodeStorage = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBNodeClass(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBNodeClass = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBNodeCount(v int64) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBNodeCount = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetCreateTime(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.CreateTime = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetEngine(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.Engine = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetEngineVersion(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.EngineVersion = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetExpireTime(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.ExpireTime = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetIsExpired(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.IsExpired = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetMaintainTime(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.MaintainTime = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetVpcId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.VpcId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetVSwitchId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.VSwitchId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetVpcCloudInstanceId(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.VpcCloudInstanceId = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetCommodityCode(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.CommodityCode = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetDBClusterNetworkType(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.DBClusterNetworkType = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetStorageType(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.StorageType = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetPublicConnectionString(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.PublicConnectionString = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetPublicPort(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.PublicPort = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetConnectionString(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.ConnectionString = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetPort(v int) *DescribeDBClusterAttributeResponseDBCluster {
	s.Port = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetAliUid(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.AliUid = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetBid(v string) *DescribeDBClusterAttributeResponseDBCluster {
	s.Bid = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBCluster) SetTags(v *DescribeDBClusterAttributeResponseDBClusterTags) *DescribeDBClusterAttributeResponseDBCluster {
	s.Tags = v
	return s
}

type DescribeDBClusterAttributeResponseDBClusterTags struct {
	Tag []*DescribeDBClusterAttributeResponseDBClusterTagsTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterAttributeResponseDBClusterTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAttributeResponseDBClusterTags) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAttributeResponseDBClusterTags) SetTag(v []*DescribeDBClusterAttributeResponseDBClusterTagsTag) *DescribeDBClusterAttributeResponseDBClusterTags {
	s.Tag = v
	return s
}

type DescribeDBClusterAttributeResponseDBClusterTagsTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeDBClusterAttributeResponseDBClusterTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterAttributeResponseDBClusterTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterAttributeResponseDBClusterTagsTag) SetKey(v string) *DescribeDBClusterAttributeResponseDBClusterTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeDBClusterAttributeResponseDBClusterTagsTag) SetValue(v string) *DescribeDBClusterAttributeResponseDBClusterTagsTag {
	s.Value = &v
	return s
}

type DescribeDBClustersRequest struct {
	RegionId             *string                         `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	DBClusterIds         *string                         `json:"DBClusterIds,omitempty" xml:"DBClusterIds,omitempty"`
	DBClusterDescription *string                         `json:"DBClusterDescription,omitempty" xml:"DBClusterDescription,omitempty"`
	DBClusterStatus      *string                         `json:"DBClusterStatus,omitempty" xml:"DBClusterStatus,omitempty"`
	PageSize             *int                            `json:"PageSize,omitempty" xml:"PageSize,omitempty"`
	PageNumber           *int                            `json:"PageNumber,omitempty" xml:"PageNumber,omitempty"`
	Tag                  []*DescribeDBClustersRequestTag `json:"Tag,omitempty" xml:"Tag,omitempty" type:"Repeated"`
}

func (s DescribeDBClustersRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersRequest) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersRequest) SetRegionId(v string) *DescribeDBClustersRequest {
	s.RegionId = &v
	return s
}

func (s *DescribeDBClustersRequest) SetDBClusterIds(v string) *DescribeDBClustersRequest {
	s.DBClusterIds = &v
	return s
}

func (s *DescribeDBClustersRequest) SetDBClusterDescription(v string) *DescribeDBClustersRequest {
	s.DBClusterDescription = &v
	return s
}

func (s *DescribeDBClustersRequest) SetDBClusterStatus(v string) *DescribeDBClustersRequest {
	s.DBClusterStatus = &v
	return s
}

func (s *DescribeDBClustersRequest) SetPageSize(v int) *DescribeDBClustersRequest {
	s.PageSize = &v
	return s
}

func (s *DescribeDBClustersRequest) SetPageNumber(v int) *DescribeDBClustersRequest {
	s.PageNumber = &v
	return s
}

func (s *DescribeDBClustersRequest) SetTag(v []*DescribeDBClustersRequestTag) *DescribeDBClustersRequest {
	s.Tag = v
	return s
}

type DescribeDBClustersRequestTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty"`
}

func (s DescribeDBClustersRequestTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersRequestTag) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersRequestTag) SetKey(v string) *DescribeDBClustersRequestTag {
	s.Key = &v
	return s
}

func (s *DescribeDBClustersRequestTag) SetValue(v string) *DescribeDBClustersRequestTag {
	s.Value = &v
	return s
}

type DescribeDBClustersResponse struct {
	RequestId  *string                               `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	PageNumber *int                                  `json:"PageNumber,omitempty" xml:"PageNumber,omitempty" require:"true"`
	TotalCount *int                                  `json:"TotalCount,omitempty" xml:"TotalCount,omitempty" require:"true"`
	PageSize   *int                                  `json:"PageSize,omitempty" xml:"PageSize,omitempty" require:"true"`
	DBClusters *DescribeDBClustersResponseDBClusters `json:"DBClusters,omitempty" xml:"DBClusters,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClustersResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersResponse) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersResponse) SetRequestId(v string) *DescribeDBClustersResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDBClustersResponse) SetPageNumber(v int) *DescribeDBClustersResponse {
	s.PageNumber = &v
	return s
}

func (s *DescribeDBClustersResponse) SetTotalCount(v int) *DescribeDBClustersResponse {
	s.TotalCount = &v
	return s
}

func (s *DescribeDBClustersResponse) SetPageSize(v int) *DescribeDBClustersResponse {
	s.PageSize = &v
	return s
}

func (s *DescribeDBClustersResponse) SetDBClusters(v *DescribeDBClustersResponseDBClusters) *DescribeDBClustersResponse {
	s.DBClusters = v
	return s
}

type DescribeDBClustersResponseDBClusters struct {
	DBCluster []*DescribeDBClustersResponseDBClustersDBCluster `json:"DBCluster,omitempty" xml:"DBCluster,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClustersResponseDBClusters) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersResponseDBClusters) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersResponseDBClusters) SetDBCluster(v []*DescribeDBClustersResponseDBClustersDBCluster) *DescribeDBClustersResponseDBClusters {
	s.DBCluster = v
	return s
}

type DescribeDBClustersResponseDBClustersDBCluster struct {
	DBClusterId          *string                                            `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
	Category             *string                                            `json:"Category,omitempty" xml:"Category,omitempty" require:"true"`
	DBClusterDescription *string                                            `json:"DBClusterDescription,omitempty" xml:"DBClusterDescription,omitempty" require:"true"`
	PayType              *string                                            `json:"PayType,omitempty" xml:"PayType,omitempty" require:"true"`
	RegionId             *string                                            `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	ZoneId               *string                                            `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	ExpireTime           *string                                            `json:"ExpireTime,omitempty" xml:"ExpireTime,omitempty" require:"true"`
	IsExpired            *string                                            `json:"IsExpired,omitempty" xml:"IsExpired,omitempty" require:"true"`
	DBClusterStatus      *string                                            `json:"DBClusterStatus,omitempty" xml:"DBClusterStatus,omitempty" require:"true"`
	LockMode             *string                                            `json:"LockMode,omitempty" xml:"LockMode,omitempty" require:"true"`
	LockReason           *string                                            `json:"LockReason,omitempty" xml:"LockReason,omitempty" require:"true"`
	CreateTime           *string                                            `json:"CreateTime,omitempty" xml:"CreateTime,omitempty" require:"true"`
	DBNodeStorage        *int64                                             `json:"DBNodeStorage,omitempty" xml:"DBNodeStorage,omitempty" require:"true"`
	DBNodeClass          *string                                            `json:"DBNodeClass,omitempty" xml:"DBNodeClass,omitempty" require:"true"`
	DBNodeCount          *int64                                             `json:"DBNodeCount,omitempty" xml:"DBNodeCount,omitempty" require:"true"`
	StorageType          *string                                            `json:"StorageType,omitempty" xml:"StorageType,omitempty" require:"true"`
	ConnectionString     *string                                            `json:"ConnectionString,omitempty" xml:"ConnectionString,omitempty" require:"true"`
	Port                 *int                                               `json:"Port,omitempty" xml:"Port,omitempty" require:"true"`
	AliUid               *string                                            `json:"AliUid,omitempty" xml:"AliUid,omitempty" require:"true"`
	Bid                  *string                                            `json:"Bid,omitempty" xml:"Bid,omitempty" require:"true"`
	DBClusterNetworkType *string                                            `json:"DBClusterNetworkType,omitempty" xml:"DBClusterNetworkType,omitempty" require:"true"`
	VpcId                *string                                            `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	VSwitchId            *string                                            `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	VpcCloudInstanceId   *string                                            `json:"VpcCloudInstanceId,omitempty" xml:"VpcCloudInstanceId,omitempty" require:"true"`
	CommodityCode        *string                                            `json:"CommodityCode,omitempty" xml:"CommodityCode,omitempty" require:"true"`
	Tags                 *DescribeDBClustersResponseDBClustersDBClusterTags `json:"Tags,omitempty" xml:"Tags,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClustersResponseDBClustersDBCluster) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersResponseDBClustersDBCluster) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBClusterId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBClusterId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetCategory(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.Category = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBClusterDescription(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBClusterDescription = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetPayType(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.PayType = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetRegionId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.RegionId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetZoneId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.ZoneId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetExpireTime(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.ExpireTime = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetIsExpired(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.IsExpired = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBClusterStatus(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBClusterStatus = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetLockMode(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.LockMode = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetLockReason(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.LockReason = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetCreateTime(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.CreateTime = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBNodeStorage(v int64) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBNodeStorage = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBNodeClass(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBNodeClass = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBNodeCount(v int64) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBNodeCount = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetStorageType(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.StorageType = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetConnectionString(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.ConnectionString = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetPort(v int) *DescribeDBClustersResponseDBClustersDBCluster {
	s.Port = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetAliUid(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.AliUid = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetBid(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.Bid = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetDBClusterNetworkType(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.DBClusterNetworkType = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetVpcId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.VpcId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetVSwitchId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.VSwitchId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetVpcCloudInstanceId(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.VpcCloudInstanceId = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetCommodityCode(v string) *DescribeDBClustersResponseDBClustersDBCluster {
	s.CommodityCode = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBCluster) SetTags(v *DescribeDBClustersResponseDBClustersDBClusterTags) *DescribeDBClustersResponseDBClustersDBCluster {
	s.Tags = v
	return s
}

type DescribeDBClustersResponseDBClustersDBClusterTags struct {
	Tag []*DescribeDBClustersResponseDBClustersDBClusterTagsTag `json:"Tag,omitempty" xml:"Tag,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClustersResponseDBClustersDBClusterTags) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersResponseDBClustersDBClusterTags) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersResponseDBClustersDBClusterTags) SetTag(v []*DescribeDBClustersResponseDBClustersDBClusterTagsTag) *DescribeDBClustersResponseDBClustersDBClusterTags {
	s.Tag = v
	return s
}

type DescribeDBClustersResponseDBClustersDBClusterTagsTag struct {
	Key   *string `json:"Key,omitempty" xml:"Key,omitempty" require:"true"`
	Value *string `json:"Value,omitempty" xml:"Value,omitempty" require:"true"`
}

func (s DescribeDBClustersResponseDBClustersDBClusterTagsTag) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClustersResponseDBClustersDBClusterTagsTag) GoString() string {
	return s.String()
}

func (s *DescribeDBClustersResponseDBClustersDBClusterTagsTag) SetKey(v string) *DescribeDBClustersResponseDBClustersDBClusterTagsTag {
	s.Key = &v
	return s
}

func (s *DescribeDBClustersResponseDBClustersDBClusterTagsTag) SetValue(v string) *DescribeDBClustersResponseDBClustersDBClusterTagsTag {
	s.Value = &v
	return s
}

type DescribeRegionsRequest struct {
}

func (s DescribeRegionsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsRequest) GoString() string {
	return s.String()
}

type DescribeRegionsResponse struct {
	RequestId *string                         `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	Regions   *DescribeRegionsResponseRegions `json:"Regions,omitempty" xml:"Regions,omitempty" require:"true" type:"Struct"`
}

func (s DescribeRegionsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponse) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponse) SetRequestId(v string) *DescribeRegionsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeRegionsResponse) SetRegions(v *DescribeRegionsResponseRegions) *DescribeRegionsResponse {
	s.Regions = v
	return s
}

type DescribeRegionsResponseRegions struct {
	Region []*DescribeRegionsResponseRegionsRegion `json:"Region,omitempty" xml:"Region,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRegionsResponseRegions) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegions) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegions) SetRegion(v []*DescribeRegionsResponseRegionsRegion) *DescribeRegionsResponseRegions {
	s.Region = v
	return s
}

type DescribeRegionsResponseRegionsRegion struct {
	RegionId *string                                    `json:"RegionId,omitempty" xml:"RegionId,omitempty" require:"true"`
	Zones    *DescribeRegionsResponseRegionsRegionZones `json:"Zones,omitempty" xml:"Zones,omitempty" require:"true" type:"Struct"`
}

func (s DescribeRegionsResponseRegionsRegion) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegionsRegion) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegionsRegion) SetRegionId(v string) *DescribeRegionsResponseRegionsRegion {
	s.RegionId = &v
	return s
}

func (s *DescribeRegionsResponseRegionsRegion) SetZones(v *DescribeRegionsResponseRegionsRegionZones) *DescribeRegionsResponseRegionsRegion {
	s.Zones = v
	return s
}

type DescribeRegionsResponseRegionsRegionZones struct {
	Zone []*DescribeRegionsResponseRegionsRegionZonesZone `json:"Zone,omitempty" xml:"Zone,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeRegionsResponseRegionsRegionZones) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegionsRegionZones) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegionsRegionZones) SetZone(v []*DescribeRegionsResponseRegionsRegionZonesZone) *DescribeRegionsResponseRegionsRegionZones {
	s.Zone = v
	return s
}

type DescribeRegionsResponseRegionsRegionZonesZone struct {
	ZoneId     *string `json:"ZoneId,omitempty" xml:"ZoneId,omitempty" require:"true"`
	VpcEnabled *bool   `json:"VpcEnabled,omitempty" xml:"VpcEnabled,omitempty" require:"true"`
}

func (s DescribeRegionsResponseRegionsRegionZonesZone) String() string {
	return tea.Prettify(s)
}

func (s DescribeRegionsResponseRegionsRegionZonesZone) GoString() string {
	return s.String()
}

func (s *DescribeRegionsResponseRegionsRegionZonesZone) SetZoneId(v string) *DescribeRegionsResponseRegionsRegionZonesZone {
	s.ZoneId = &v
	return s
}

func (s *DescribeRegionsResponseRegionsRegionZonesZone) SetVpcEnabled(v bool) *DescribeRegionsResponseRegionsRegionZonesZone {
	s.VpcEnabled = &v
	return s
}

type DescribeDBClusterNetInfoItemsRequest struct {
	DBClusterId *string `json:"DBClusterId,omitempty" xml:"DBClusterId,omitempty" require:"true"`
}

func (s DescribeDBClusterNetInfoItemsRequest) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterNetInfoItemsRequest) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterNetInfoItemsRequest) SetDBClusterId(v string) *DescribeDBClusterNetInfoItemsRequest {
	s.DBClusterId = &v
	return s
}

type DescribeDBClusterNetInfoItemsResponse struct {
	RequestId          *string                                            `json:"RequestId,omitempty" xml:"RequestId,omitempty" require:"true"`
	ClusterNetworkType *string                                            `json:"ClusterNetworkType,omitempty" xml:"ClusterNetworkType,omitempty" require:"true"`
	NetInfoItems       *DescribeDBClusterNetInfoItemsResponseNetInfoItems `json:"NetInfoItems,omitempty" xml:"NetInfoItems,omitempty" require:"true" type:"Struct"`
}

func (s DescribeDBClusterNetInfoItemsResponse) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterNetInfoItemsResponse) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterNetInfoItemsResponse) SetRequestId(v string) *DescribeDBClusterNetInfoItemsResponse {
	s.RequestId = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponse) SetClusterNetworkType(v string) *DescribeDBClusterNetInfoItemsResponse {
	s.ClusterNetworkType = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponse) SetNetInfoItems(v *DescribeDBClusterNetInfoItemsResponseNetInfoItems) *DescribeDBClusterNetInfoItemsResponse {
	s.NetInfoItems = v
	return s
}

type DescribeDBClusterNetInfoItemsResponseNetInfoItems struct {
	NetInfoItem []*DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem `json:"NetInfoItem,omitempty" xml:"NetInfoItem,omitempty" require:"true" type:"Repeated"`
}

func (s DescribeDBClusterNetInfoItemsResponseNetInfoItems) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterNetInfoItemsResponseNetInfoItems) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItems) SetNetInfoItem(v []*DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) *DescribeDBClusterNetInfoItemsResponseNetInfoItems {
	s.NetInfoItem = v
	return s
}

type DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem struct {
	ConnectionString *string `json:"ConnectionString,omitempty" xml:"ConnectionString,omitempty" require:"true"`
	IPAddress        *string `json:"IPAddress,omitempty" xml:"IPAddress,omitempty" require:"true"`
	NetType          *string `json:"NetType,omitempty" xml:"NetType,omitempty" require:"true"`
	HttpPort         *string `json:"HttpPort,omitempty" xml:"HttpPort,omitempty" require:"true"`
	VpcId            *string `json:"VpcId,omitempty" xml:"VpcId,omitempty" require:"true"`
	VSwitchId        *string `json:"VSwitchId,omitempty" xml:"VSwitchId,omitempty" require:"true"`
	JdbcPort         *string `json:"JdbcPort,omitempty" xml:"JdbcPort,omitempty" require:"true"`
}

func (s DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) String() string {
	return tea.Prettify(s)
}

func (s DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) GoString() string {
	return s.String()
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetConnectionString(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.ConnectionString = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetIPAddress(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.IPAddress = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetNetType(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.NetType = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetHttpPort(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.HttpPort = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetVpcId(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.VpcId = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetVSwitchId(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.VSwitchId = &v
	return s
}

func (s *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem) SetJdbcPort(v string) *DescribeDBClusterNetInfoItemsResponseNetInfoItemsNetInfoItem {
	s.JdbcPort = &v
	return s
}

type Client struct {
	rpc.Client
}

func NewClient(config *rpc.Config) (*Client, error) {
	client := new(Client)
	err := client.Init(config)
	return client, err
}

func (client *Client) Init(config *rpc.Config) (_err error) {
	_err = client.Client.Init(config)
	if _err != nil {
		return _err
	}
	client.EndpointRule = tea.String("regional")
	client.EndpointMap = map[string]*string{
		"ap-northeast-2-pop":          tea.String("clickhouse.aliyuncs.com"),
		"ap-southeast-1":              tea.String("clickhouse.aliyuncs.com"),
		"cn-beijing":                  tea.String("clickhouse.aliyuncs.com"),
		"cn-beijing-finance-1":        tea.String("clickhouse.aliyuncs.com"),
		"cn-beijing-finance-pop":      tea.String("clickhouse.aliyuncs.com"),
		"cn-beijing-gov-1":            tea.String("clickhouse.aliyuncs.com"),
		"cn-beijing-nu16-b01":         tea.String("clickhouse.aliyuncs.com"),
		"cn-edge-1":                   tea.String("clickhouse.aliyuncs.com"),
		"cn-fujian":                   tea.String("clickhouse.aliyuncs.com"),
		"cn-haidian-cm12-c01":         tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou":                 tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-bj-b01":          tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-finance":         tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-internal-prod-1": tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-internal-test-1": tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-internal-test-2": tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-internal-test-3": tea.String("clickhouse.aliyuncs.com"),
		"cn-hangzhou-test-306":        tea.String("clickhouse.aliyuncs.com"),
		"cn-hongkong":                 tea.String("clickhouse.aliyuncs.com"),
		"cn-hongkong-finance-pop":     tea.String("clickhouse.aliyuncs.com"),
		"cn-north-2-gov-1":            tea.String("clickhouse.aliyuncs.com"),
		"cn-qingdao":                  tea.String("clickhouse.aliyuncs.com"),
		"cn-qingdao-nebula":           tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai":                 tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai-et15-b01":        tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai-et2-b01":         tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai-finance-1":       tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai-inner":           tea.String("clickhouse.aliyuncs.com"),
		"cn-shanghai-internal-test-1": tea.String("clickhouse.aliyuncs.com"),
		"cn-shenzhen":                 tea.String("clickhouse.aliyuncs.com"),
		"cn-shenzhen-finance-1":       tea.String("clickhouse.aliyuncs.com"),
		"cn-shenzhen-inner":           tea.String("clickhouse.aliyuncs.com"),
		"cn-shenzhen-st4-d01":         tea.String("clickhouse.aliyuncs.com"),
		"cn-shenzhen-su18-b01":        tea.String("clickhouse.aliyuncs.com"),
		"cn-wuhan":                    tea.String("clickhouse.aliyuncs.com"),
		"cn-yushanfang":               tea.String("clickhouse.aliyuncs.com"),
		"cn-zhangbei-na61-b01":        tea.String("clickhouse.aliyuncs.com"),
		"cn-zhangjiakou-na62-a01":     tea.String("clickhouse.aliyuncs.com"),
		"cn-zhengzhou-nebula-1":       tea.String("clickhouse.aliyuncs.com"),
		"eu-west-1-oxs":               tea.String("clickhouse.aliyuncs.com"),
		"me-east-1":                   tea.String("clickhouse.aliyuncs.com"),
		"rus-west-1-pop":              tea.String("clickhouse.aliyuncs.com"),
		"us-east-1":                   tea.String("clickhouse.aliyuncs.com"),
		"us-west-1":                   tea.String("clickhouse.aliyuncs.com"),
	}
	_err = client.CheckConfig(config)
	if _err != nil {
		return _err
	}
	client.Endpoint, _err = client.GetEndpoint(tea.String("clickhouse"), client.RegionId, client.EndpointRule, client.Network, client.Suffix, client.EndpointMap, client.Endpoint)
	if _err != nil {
		return _err
	}

	return nil
}

func (client *Client) DescribeAllDataSourceWithOptions(request *DescribeAllDataSourceRequest, runtime *util.RuntimeOptions) (_result *DescribeAllDataSourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAllDataSourceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAllDataSource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAllDataSource(request *DescribeAllDataSourceRequest) (_result *DescribeAllDataSourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAllDataSourceResponse{}
	_body, _err := client.DescribeAllDataSourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeColumnsWithOptions(request *DescribeColumnsRequest, runtime *util.RuntimeOptions) (_result *DescribeColumnsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeColumnsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeColumns"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeColumns(request *DescribeColumnsRequest) (_result *DescribeColumnsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeColumnsResponse{}
	_body, _err := client.DescribeColumnsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeTablesWithOptions(request *DescribeTablesRequest, runtime *util.RuntimeOptions) (_result *DescribeTablesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeTablesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeTables"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeTables(request *DescribeTablesRequest) (_result *DescribeTablesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeTablesResponse{}
	_body, _err := client.DescribeTablesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeSchemasWithOptions(request *DescribeSchemasRequest, runtime *util.RuntimeOptions) (_result *DescribeSchemasResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeSchemasResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeSchemas"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeSchemas(request *DescribeSchemasRequest) (_result *DescribeSchemasResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeSchemasResponse{}
	_body, _err := client.DescribeSchemasWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAllDataSourcesWithOptions(request *DescribeAllDataSourcesRequest, runtime *util.RuntimeOptions) (_result *DescribeAllDataSourcesResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAllDataSourcesResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAllDataSources"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAllDataSources(request *DescribeAllDataSourcesRequest) (_result *DescribeAllDataSourcesResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAllDataSourcesResponse{}
	_body, _err := client.DescribeAllDataSourcesWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLoghubDetailWithOptions(request *DescribeLoghubDetailRequest, runtime *util.RuntimeOptions) (_result *DescribeLoghubDetailResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLoghubDetailResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLoghubDetail"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLoghubDetail(request *DescribeLoghubDetailRequest) (_result *DescribeLoghubDetailResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLoghubDetailResponse{}
	_body, _err := client.DescribeLoghubDetailWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) OperateLogHubWithOptions(request *OperateLogHubRequest, runtime *util.RuntimeOptions) (_result *OperateLogHubResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &OperateLogHubResponse{}
	_body, _err := client.DoRequest(tea.String("OperateLogHub"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) OperateLogHub(request *OperateLogHubRequest) (_result *OperateLogHubResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &OperateLogHubResponse{}
	_body, _err := client.OperateLogHubWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeLogStoreKeysWithOptions(request *DescribeLogStoreKeysRequest, runtime *util.RuntimeOptions) (_result *DescribeLogStoreKeysResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeLogStoreKeysResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeLogStoreKeys"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeLogStoreKeys(request *DescribeLogStoreKeysRequest) (_result *DescribeLogStoreKeysResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeLogStoreKeysResponse{}
	_body, _err := client.DescribeLogStoreKeysWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateDBInstanceWithOptions(request *CreateDBInstanceRequest, runtime *util.RuntimeOptions) (_result *CreateDBInstanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateDBInstanceResponse{}
	_body, _err := client.DoRequest(tea.String("CreateDBInstance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateDBInstance(request *CreateDBInstanceRequest) (_result *CreateDBInstanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateDBInstanceResponse{}
	_body, _err := client.CreateDBInstanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAvailableResourceWithOptions(request *DescribeAvailableResourceRequest, runtime *util.RuntimeOptions) (_result *DescribeAvailableResourceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAvailableResourceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAvailableResource"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAvailableResource(request *DescribeAvailableResourceRequest) (_result *DescribeAvailableResourceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAvailableResourceResponse{}
	_body, _err := client.DescribeAvailableResourceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDBClusterPerformanceWithOptions(request *DescribeDBClusterPerformanceRequest, runtime *util.RuntimeOptions) (_result *DescribeDBClusterPerformanceResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDBClusterPerformanceResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDBClusterPerformance"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDBClusterPerformance(request *DescribeDBClusterPerformanceRequest) (_result *DescribeDBClusterPerformanceResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDBClusterPerformanceResponse{}
	_body, _err := client.DescribeDBClusterPerformanceWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) AllocateClusterPublicConnectionWithOptions(request *AllocateClusterPublicConnectionRequest, runtime *util.RuntimeOptions) (_result *AllocateClusterPublicConnectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &AllocateClusterPublicConnectionResponse{}
	_body, _err := client.DoRequest(tea.String("AllocateClusterPublicConnection"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) AllocateClusterPublicConnection(request *AllocateClusterPublicConnectionRequest) (_result *AllocateClusterPublicConnectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &AllocateClusterPublicConnectionResponse{}
	_body, _err := client.AllocateClusterPublicConnectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ReleaseClusterPublicConnectionWithOptions(request *ReleaseClusterPublicConnectionRequest, runtime *util.RuntimeOptions) (_result *ReleaseClusterPublicConnectionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ReleaseClusterPublicConnectionResponse{}
	_body, _err := client.DoRequest(tea.String("ReleaseClusterPublicConnection"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ReleaseClusterPublicConnection(request *ReleaseClusterPublicConnectionRequest) (_result *ReleaseClusterPublicConnectionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ReleaseClusterPublicConnectionResponse{}
	_body, _err := client.ReleaseClusterPublicConnectionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteAccountWithOptions(request *DeleteAccountRequest, runtime *util.RuntimeOptions) (_result *DeleteAccountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteAccountResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteAccount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteAccount(request *DeleteAccountRequest) (_result *DeleteAccountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteAccountResponse{}
	_body, _err := client.DeleteAccountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) CreateAccountWithOptions(request *CreateAccountRequest, runtime *util.RuntimeOptions) (_result *CreateAccountResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &CreateAccountResponse{}
	_body, _err := client.DoRequest(tea.String("CreateAccount"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) CreateAccount(request *CreateAccountRequest) (_result *CreateAccountResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &CreateAccountResponse{}
	_body, _err := client.CreateAccountWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeAccountsWithOptions(request *DescribeAccountsRequest, runtime *util.RuntimeOptions) (_result *DescribeAccountsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeAccountsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeAccounts"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeAccounts(request *DescribeAccountsRequest) (_result *DescribeAccountsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeAccountsResponse{}
	_body, _err := client.DescribeAccountsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyDBClusterAccessWhiteListWithOptions(request *ModifyDBClusterAccessWhiteListRequest, runtime *util.RuntimeOptions) (_result *ModifyDBClusterAccessWhiteListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyDBClusterAccessWhiteListResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyDBClusterAccessWhiteList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyDBClusterAccessWhiteList(request *ModifyDBClusterAccessWhiteListRequest) (_result *ModifyDBClusterAccessWhiteListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyDBClusterAccessWhiteListResponse{}
	_body, _err := client.ModifyDBClusterAccessWhiteListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDBClusterAccessWhiteListWithOptions(request *DescribeDBClusterAccessWhiteListRequest, runtime *util.RuntimeOptions) (_result *DescribeDBClusterAccessWhiteListResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDBClusterAccessWhiteListResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDBClusterAccessWhiteList"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDBClusterAccessWhiteList(request *DescribeDBClusterAccessWhiteListRequest) (_result *DescribeDBClusterAccessWhiteListResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDBClusterAccessWhiteListResponse{}
	_body, _err := client.DescribeDBClusterAccessWhiteListWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyDBClusterMaintainTimeWithOptions(request *ModifyDBClusterMaintainTimeRequest, runtime *util.RuntimeOptions) (_result *ModifyDBClusterMaintainTimeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyDBClusterMaintainTimeResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyDBClusterMaintainTime"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyDBClusterMaintainTime(request *ModifyDBClusterMaintainTimeRequest) (_result *ModifyDBClusterMaintainTimeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyDBClusterMaintainTimeResponse{}
	_body, _err := client.ModifyDBClusterMaintainTimeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyDBClusterDescriptionWithOptions(request *ModifyDBClusterDescriptionRequest, runtime *util.RuntimeOptions) (_result *ModifyDBClusterDescriptionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyDBClusterDescriptionResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyDBClusterDescription"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyDBClusterDescription(request *ModifyDBClusterDescriptionRequest) (_result *ModifyDBClusterDescriptionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyDBClusterDescriptionResponse{}
	_body, _err := client.ModifyDBClusterDescriptionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DeleteDBClusterWithOptions(request *DeleteDBClusterRequest, runtime *util.RuntimeOptions) (_result *DeleteDBClusterResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DeleteDBClusterResponse{}
	_body, _err := client.DoRequest(tea.String("DeleteDBCluster"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DeleteDBCluster(request *DeleteDBClusterRequest) (_result *DeleteDBClusterResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DeleteDBClusterResponse{}
	_body, _err := client.DeleteDBClusterWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ModifyAccountDescriptionWithOptions(request *ModifyAccountDescriptionRequest, runtime *util.RuntimeOptions) (_result *ModifyAccountDescriptionResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ModifyAccountDescriptionResponse{}
	_body, _err := client.DoRequest(tea.String("ModifyAccountDescription"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ModifyAccountDescription(request *ModifyAccountDescriptionRequest) (_result *ModifyAccountDescriptionResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ModifyAccountDescriptionResponse{}
	_body, _err := client.ModifyAccountDescriptionWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) ResetAccountPasswordWithOptions(request *ResetAccountPasswordRequest, runtime *util.RuntimeOptions) (_result *ResetAccountPasswordResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &ResetAccountPasswordResponse{}
	_body, _err := client.DoRequest(tea.String("ResetAccountPassword"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) ResetAccountPassword(request *ResetAccountPasswordRequest) (_result *ResetAccountPasswordResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &ResetAccountPasswordResponse{}
	_body, _err := client.ResetAccountPasswordWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDBClusterAttributeWithOptions(request *DescribeDBClusterAttributeRequest, runtime *util.RuntimeOptions) (_result *DescribeDBClusterAttributeResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDBClusterAttributeResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDBClusterAttribute"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDBClusterAttribute(request *DescribeDBClusterAttributeRequest) (_result *DescribeDBClusterAttributeResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDBClusterAttributeResponse{}
	_body, _err := client.DescribeDBClusterAttributeWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDBClustersWithOptions(request *DescribeDBClustersRequest, runtime *util.RuntimeOptions) (_result *DescribeDBClustersResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDBClustersResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDBClusters"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDBClusters(request *DescribeDBClustersRequest) (_result *DescribeDBClustersResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDBClustersResponse{}
	_body, _err := client.DescribeDBClustersWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeRegionsWithOptions(request *DescribeRegionsRequest, runtime *util.RuntimeOptions) (_result *DescribeRegionsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeRegionsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeRegions"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeRegions(request *DescribeRegionsRequest) (_result *DescribeRegionsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeRegionsResponse{}
	_body, _err := client.DescribeRegionsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) DescribeDBClusterNetInfoItemsWithOptions(request *DescribeDBClusterNetInfoItemsRequest, runtime *util.RuntimeOptions) (_result *DescribeDBClusterNetInfoItemsResponse, _err error) {
	_err = util.ValidateModel(request)
	if _err != nil {
		return _result, _err
	}
	_result = &DescribeDBClusterNetInfoItemsResponse{}
	_body, _err := client.DoRequest(tea.String("DescribeDBClusterNetInfoItems"), tea.String("HTTPS"), tea.String("POST"), tea.String("2019-11-11"), tea.String("AK"), nil, tea.ToMap(request), runtime)
	if _err != nil {
		return _result, _err
	}
	_err = tea.Convert(_body, &_result)
	return _result, _err
}

func (client *Client) DescribeDBClusterNetInfoItems(request *DescribeDBClusterNetInfoItemsRequest) (_result *DescribeDBClusterNetInfoItemsResponse, _err error) {
	runtime := &util.RuntimeOptions{}
	_result = &DescribeDBClusterNetInfoItemsResponse{}
	_body, _err := client.DescribeDBClusterNetInfoItemsWithOptions(request, runtime)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}

func (client *Client) GetEndpoint(productId *string, regionId *string, endpointRule *string, network *string, suffix *string, endpointMap map[string]*string, endpoint *string) (_result *string, _err error) {
	if !tea.BoolValue(util.Empty(endpoint)) {
		_result = endpoint
		return _result, _err
	}

	if !tea.BoolValue(util.IsUnset(endpointMap)) && !tea.BoolValue(util.Empty(endpointMap[tea.StringValue(regionId)])) {
		_result = endpointMap[tea.StringValue(regionId)]
		return _result, _err
	}

	_body, _err := endpointutil.GetEndpointRules(productId, regionId, endpointRule, network, suffix)
	if _err != nil {
		return _result, _err
	}
	_result = _body
	return _result, _err
}
