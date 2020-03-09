// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeTableResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeTableResponseData Data { get; set; }
        public class RecognizeTableResponseData : TeaModel {
            [NameInMap("FileContent")]
            [Validation(Required=true)]
            public string FileContent { get; set; }
            [NameInMap("Tables")]
            [Validation(Required=true)]
            public List<RecognizeTableResponseDataTables> Tables { get; set; }
            public class RecognizeTableResponseDataTables : TeaModel {
                    public string Head { get; set; }
                    public string Tail { get; set; }
                    public List<RecognizeTableResponseDataTablesTableRows> TableRows { get; set; }
                    public class RecognizeTableResponseDataTablesTableRows : TeaModel {
                            public List<RecognizeTableResponseDataTablesTableRowsTableColumns> TableColumns { get; set; }
                            public class RecognizeTableResponseDataTablesTableRowsTableColumns : TeaModel {
                                    public int? StartColumn { get; set; }
                                    public int? StartRow { get; set; }
                                    public int? EndColumn { get; set; }
                                    public int? EndRow { get; set; }
                                    public int? Height { get; set; }
                                    public int? Width { get; set; }
                                    public List<RecognizeTableResponseDataTablesTableRowsTableColumnsTexts> Texts { get; set; }
                                    public class RecognizeTableResponseDataTablesTableRowsTableColumnsTexts : TeaModel {
                                            public string Text { get; set; }
                                    }
                            }
                    }
            }
        };

    }

}
