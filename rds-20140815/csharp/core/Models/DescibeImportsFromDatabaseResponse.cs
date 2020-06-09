// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescibeImportsFromDatabaseResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescibeImportsFromDatabaseResponseItems Items { get; set; }
        public class DescibeImportsFromDatabaseResponseItems : TeaModel {
            [NameInMap("ImportResultFromDB")]
            [Validation(Required=true)]
            public List<DescibeImportsFromDatabaseResponseItemsImportResultFromDB> ImportResultFromDB { get; set; }
            public class DescibeImportsFromDatabaseResponseItemsImportResultFromDB : TeaModel {
                    public int? ImportId { get; set; }
                    public string ImportDataType { get; set; }
                    public string ImportDataStatus { get; set; }
                    public string ImportDataStatusDescription { get; set; }
                    public string IncrementalImportingTime { get; set; }
            }
        };

    }

}
