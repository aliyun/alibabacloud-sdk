// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListRemindsRequest : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Founder")]
        [Validation(Required=false)]
        public string Founder { get; set; }

        [NameInMap("NodeId")]
        [Validation(Required=false)]
        public long NodeId { get; set; }

        [NameInMap("RemindTypes")]
        [Validation(Required=false)]
        public string RemindTypes { get; set; }

        [NameInMap("AlertTarget")]
        [Validation(Required=false)]
        public string AlertTarget { get; set; }

        [NameInMap("SearchText")]
        [Validation(Required=false)]
        public string SearchText { get; set; }

    }

}
