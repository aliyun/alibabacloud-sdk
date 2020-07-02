// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class SearchMetaTablesRequest : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("AppGuid")]
        [Validation(Required=false)]
        public string AppGuid { get; set; }

        [NameInMap("Keyword")]
        [Validation(Required=true)]
        public string Keyword { get; set; }

        [NameInMap("EntityType")]
        [Validation(Required=false)]
        public int? EntityType { get; set; }

    }

}
