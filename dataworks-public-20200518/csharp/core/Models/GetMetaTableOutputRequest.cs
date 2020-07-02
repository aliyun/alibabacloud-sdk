// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableOutputRequest : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("TableGuid")]
        [Validation(Required=true)]
        public string TableGuid { get; set; }

        [NameInMap("StartDate")]
        [Validation(Required=true)]
        public string StartDate { get; set; }

        [NameInMap("EndDate")]
        [Validation(Required=true)]
        public string EndDate { get; set; }

    }

}
