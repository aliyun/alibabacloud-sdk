// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch20200320.Models
{
    public class DeleteImageRequest : TeaModel {
        [NameInMap("DbName")]
        [Validation(Required=true)]
        public string DbName { get; set; }

        [NameInMap("EntityId")]
        [Validation(Required=true)]
        public string EntityId { get; set; }

    }

}
