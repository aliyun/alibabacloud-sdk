// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class AddToMetaCategoryRequest : TeaModel {
        [NameInMap("CategoryId")]
        [Validation(Required=true)]
        public long CategoryId { get; set; }

        [NameInMap("TableGuid")]
        [Validation(Required=true)]
        public string TableGuid { get; set; }

    }

}
